@extends('layouts.formLayout');
@section('title')Login @endsection
@section('formArea')
    <form action="{{route('loginValidation')}}" method="POST">
        @csrf
         <input type="text" placeholder="Email" value ="{{old('email')}}"name="email"><br>
         <input type="password" placeholder="Password"value="{{old('password')}}" name="password"><br>
         <input type="checkbox" id="check">
         <label for="check">Remember Password?</label><br><br>
         <button><b>Login</b></button>
     </form>

     <div class="errormsg">
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
     </div>
     <p>Don't have Account?<a href="{{route('signin')}}">Sign Up</a></p>

    
     <div class="errormsg">{{ session('unsuccess') }}</div>
    
@endsection