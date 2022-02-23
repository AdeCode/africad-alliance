<?php

namespace App\Http\Controllers;

use App\Models\Wait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WaitlistController extends Controller
{
    //
    public function showWaitlist()
    {
        return view('waitlist');
    }

    public function saveWaitlist(Request $request){
        $request->validate([
            'email' => 'required|unique:waits',           
        ]);
        $waitlist = Wait::create($request->all());
        if($waitlist){
            $email_data = [
                'recipient' => $waitlist['email'],
                'fromEmail' => $waitlist['email'],
                'fromName' => 'Africad Alliance',
                'subject' => 'Africad Alliance',
                'body' => 'Thanks for signing up to be a part of our community. Kindly click the link below to confirm your 
                subscription and you\'ll be on your way'
            ];
            \Mail::send('mails.waitlist', $email_data, function($message) use ($email_data){
                $message->to($email_data['recipient'])
                        ->from($email_data['fromEmail'], $email_data['fromName'])
                        ->subject($email_data['subject']);
            });
            //return redirect()->back()->with('success', 'Email Sent!');          
        }else{
            return ('error encountered');
        }
    }

    public function isOnline($site = "https://www.google.com/")
    {
        if(@fopen($site, "r"))
        {
            return true;
        }else{
            return false;
        }
    }

    public function viewRegisteredUsers(){
        $users = Wait::all();
        //dd($users);
        return view('showUsers', compact('users'));
    }
}
