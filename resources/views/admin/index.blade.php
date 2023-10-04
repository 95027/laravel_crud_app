<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="m-2">
    <h2 class="text-center"> crud operations</h2>
    <div class="mb-3 mt-3">
        <a href="{{route("create")}}">
            <button class="border-0 rounded p-2">Insert</button>
        </a>
    </div>
    <div>
        @if (session()->get('message'))
        <h6>{{session()->get('message')}}</h6>  
        @endif
    </div>
    <table class="w-100 mx-auto border">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>file</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profiles as $profile)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$profile->name}}</td>
                <td>{{$profile->email}}</td>
                <td>{{$profile->phone}}</td>
                <td>{{$profile->file}}</td>
                <td>
                    <a href="{{route('edit', $profile->id)}}">
                        <button class="bg-primary text-white border-0 rounded">Edit</button>
                    </a>
                    <a href="{{route('delete', $profile->id)}}" onclick="return confirm('Are you sure to delete it !')">
                        <button class="bg-danger text-white border-0 rounded">Delete</button>
                    </a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    <div class="mt-3 links">
        {{ $profiles->links() }}
    </div>
</body>
</html>