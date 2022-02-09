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
                'body' => 'Thank you for signing up to our waiting list, we will get back to you soon.'
            ];
            \Mail::send('mails.waitlist', $email_data, function($message) use ($email_data){
                $message->to($email_data['recipient'])
                        ->from($email_data['fromEmail'], $email_data['fromName'])
                        ->subject($email_data['subject']);
            });
            return redirect()->back()->with('success', 'Email Sent!');          
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
}
