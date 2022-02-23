<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            @if ($users)
                @foreach ($users as $user)                    
                    <li>
                    {{  $user->email }}
                    </li>
                @endforeach
            @else
                <h2>No registered user</h2>
            @endif
           
        </ul>
    </div>
    
</body>
</html>