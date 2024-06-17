@extends('layouts.formLayout');
@section('title')Signin @endsection
@section('msg')
    <h2>Sign in to your BlogSite</h2>
    <p>Welcome, select method to Signin</p>
@endsection
@section('formArea')
<p>{{route('Validation')}}</p>
    <form action="{{ route('Validation') }}" method="POST">

        @csrf
  
        <input type="text" value="{{old('fullName')}}"placeholder="Full Name" name="fullName"><br>
        <div class="errormsg">@error('fullname'){{'Error happen'}}@enderror</div>

         <input type="text" placeholder="Email" value="{{old('email')}}" name="email"><br>
         <div class="errormsg"></div>

         <input type="number" placeholder="Phone"name="phone" value="{{old('phone')}}"><br>

         <input type="password" placeholder="Password" name="password" value="{{old('password')}}"><br>


         <input type="password" placeholder="Conform Password" name="conformPassword" value="{{old('conformPassword')}}"><br>
         <label for="check">Remember Password?</label><br><br>
         <button type="submit"><b>Signin</b></button>
     </form>

     
     <div class="errormsg">
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
     </div>
  
     <p>Already have Account?<a href="{{route('login')}}">Login</a></p>
     <div class="alert alert-success">
        {{ session('success') }}
    </div>
    
@endsection