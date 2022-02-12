<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Africad Alliance</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background:rgba(94, 120, 165, 0.72);
            height: 100vh;
        }
        .content{
            width: 50vw;
            height: auto;
            background: #fff;
            color: rgba(24, 23, 23, 0.685);
            padding: 10px 20px;
        }
        .logo{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .link{
            background: rgb(37, 37, 122);
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        @media screen and (max-width: 600px) {
            .content{
                width: 90vw;  
                padding: 5px 10px              
            }
            .link{
                padding: 5px 10px;
            }        
        }
    </style>
</head>
<body>
    <div class="content">
        {{-- <h1>{{ $details['title'] }}</h1>
        <p>{{ $details['body'] }}</p> --}}
        <div class="logo">
            <img src="https://www.dropbox.com/s/uq9dl8rpx2on0ry/logo.png?raw=1 " alt="logo" style="height:30vh; width:80%">
        </div>
        <p>Hi, I'm Damilare from Africad Alliance</p>
        <p>{{$body}}</p>
        <div>
            <a href="#" class="link" style="color: #fff">Confirm your subscription</a>
        </div>
        <p>Also, you can join our Telegram community and have up to date information on what we are building. our 
            upcoming events and more inside information on Africad Allaince
        </p>
        <p>Thank you</p>
    </div>
</body>
</html>

{{-- @component('mail::message')

Dear {{$email}}

Thank you for subscribing

Thanks, <br>
{{ config('app.name') }}
    
@endcomponent --}}