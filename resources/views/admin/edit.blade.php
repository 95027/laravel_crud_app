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
<body>
    <div>
        <form action="{{route('update')}}" method="post">
            @csrf
            <div>
                <input type="hidden" name="id" value="{{$profile->id}}"/><br/><br/>
            </div>
            <div>
                <input type="text" name="name" placeholder="name" value="{{$profile->name}}"/><br/><br/>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <input type="email" name="email" placeholder="email" value="{{$profile->email}}"/><br/><br/>
                <span  class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <input type="text" name="phone" placeholder="phone" value="{{$profile->phone}}"/><br/><br/>
                <span  class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <input type="file" name="file" value="{{$profile->file}}"/><br/><br/>
                <span  class="text-danger">
                    @error('file')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <input type="submit" name="submit" />
            </div>
        </form>
    </div>
</body>
</html>