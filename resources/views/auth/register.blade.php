<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    @include('bootstrap.css')
</head>
<body>
    <div class="page">
        <div class="login bg-white rounded-4">
            <h2 class="text-center mt-2">Form Register</h2>
            @if (Session::has('success'))
<div class="alert alert-success  alert-dismissible fade show" role="alert">
  {{Session::get('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('deleted'))
<div class="alert alert-danger  alert-dismissible fade show" role="alert">
  {{Session::get('deleted')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

         <form action="{{url('user')}}" method="post" class="p-3">
            @csrf
            <div class="row justify-content-evenly">
                <div class="form-group col">
                    <label class="form-label">Nama depan</label>
                    <input type="text" name="firstName" class="form-control w-100" value="{{old('firstName')}}">
                    <span class="text-danger">
                        @error('firstName')
                        {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col">
                    <label class="form-label">Nama belakang</label>
                    <input type="text" name="lastName" class="form-control w-100" value="{{old('lastName')}}">
                    <span class="text-danger">
                        @error('lastName')
                        {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control w-100" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                        @enderror
                </span>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control w-100" value="{{old('password')}}">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <button class="btn btn-primary w-100 mt-4" type="submit">Register</button>
            <a href="{{url('login')}}" class="button-login btn btn-outline-primary w-100 my-3">Login Sekarang</a>
         </form>
        </div>
        @include('bootstrap.js')
</body>
<style>
       .page{
        background: url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1856&q=80');
        min-height: 100vh;
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .login{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 1rem;
    }

    a .button-login{
        transition: 1s;
    }

    a .button-login:hover{
        color: #fff;
        transition: 1s;
        background-color: rgb(104, 104, 243);
    }
</style>
</html>


