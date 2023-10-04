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
    <div class="m-5">
        {{--  @php
            print_r($errors->all())
        @endphp --}}
{{--         <ul class="bg-danger w-25">
           @foreach ($errors->all() as $error)
           <li>{{$error}}</li> 
           @endforeach
        </ul> --}}
        <div class="mt-3 mb-3">
            <a href="{{route('home')}}">
                <button>Back</button>
            </a>
        </div>
        <form action="{{route("store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" name="name" placeholder="name"/><br/><br/>
                @if($errors->any())
                <div class="mt20">
                    <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                @endif
            </div>
            <div>
                <input type="text" name="email" placeholder="email"/><br/><br/>
                @if($errors->any())
                <div class="mt20">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                @endif
            </div>
            <div>
                <input type="text" name="phone" placeholder="phone"/><br/><br/>
                @if($errors->any())
                <div class="mt20">
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                @endif
            </div>
            <div>
                <input type="file" name="file" accept=".doc, .pdf"/><br/><br/>
                @if($errors->any())
                <div class="mt20">
                    <span class="text-danger">
                        @error('file')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                @endif
            </div>
            <div>
                <input type="submit" name="submit" />
            </div>
        </form>
    </div>
</body>
</html>