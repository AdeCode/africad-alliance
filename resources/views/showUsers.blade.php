<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div>
            @if ($users)
            <table>
                <tr>
                    <th>email</th>
                    <th>delete</th>
                </tr>
            
            <tbody>
                @foreach ($users as $user) 
                <tr>
                    <td>{{  $user->email }}</td>
                    <td>
                        <form action="{{ route('deleteUser', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        {{-- <form id="delete-form-{{$user->id}}" action="{{route('deleteUser', $user->id)}}" style="display: none" method="POST">
                          @csrf
                          {{method_field('DELETE')}}
                        </form>
                        <a href="{{route('viewWaitlist')}}" onclick="
                          if(confirm('Are you sure, you want to delete this?'))
                            {
                              event.preventDefault();
                              document.getElementById('delete-form-{{$user->id}}').submit();
                            }
                            else{
                              event.preventDefault();
                            }">Delete
                        </a> --}}
                    </td>  
                </tr>          
                @endforeach
                
            </tbody>
        </table>
            @else
                <h2>No registered user</h2>
            @endif
           
    </div>
    
</body>
</html>