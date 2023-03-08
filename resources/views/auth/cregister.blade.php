@extends('layouts.app')
@section('content')

<html lang="en">
  <head>

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="{{asset('pakistantop/assets/images/favicon.png')}}" type="image/x-icon" />
   <link href='http://fonts.gstatic.com/' crossorigin rel='preconnect' />
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Pakistan's Top website | News, Entertainment, Health ...</title>
   <meta name="description" content="Largest Social Website of the World | News, Entertainment, Health, Business, Islam, Quran, Hadees, Education, Technology, Mobile, Sports, Dictionary">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <title>Register</title>
  </head>
  <body>
    <div class="com-body">
    <div class="cust-container mx-auto">
      <div class="top-point">
        <div class="row">
          <div class="col-md-5">

          </div>
          <div class="col-md-4">
            <div class="arrg-text">
             <a href="#"><span>Don’t have an account?</span></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="arrg-btn">
              <a href="/clogin">Login</a>
            </div>
          </div>
        </div>
      </div>
      <!-- this is logo -->
      <div class="row">
        <div class="col-md-4">
          <div class="arrg-logo">
          <a href="/"><img height="60px" src="{{asset('pakistantop/assets/images/pak_top.png')}}" alt=""></a>
          </div>
        </div>
        <div class="col-md-8">
        </div>
      </div>
      <!-- this is heading -->
      <div class="row">
        <div class="col-md-12">
          <div class="arrg-heading">
           <h1>Welcome, To Pakistan Top!</h1>
          </div>
        </div>
      </div>
      <!-- this is text -->
      <div class="row">
        <div class="col-md-12">
          <div class="text-row">
           <p>Register your account!</p>
          </div>
        </div>
      </div>
      <!-- this is input fields -->
      <form action="{{ route('register.custom') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="arrg-input">
           <input type="text" placeholder="Name" id="name" class="form-control" name="name"
           required autofocus>
           @if ($errors->has('name'))
           <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
        </div>
        <div class="col-md-12">
          <div class="arrg-input">
           <input type="email" placeholder="Email" id="email_address" class="form-control"
           name="email" required autofocus>
           @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
        </div>
        <div class="col-md-12">
          <div class="arrg-input">
           <input type="password" placeholder="Password" id="password"
           name="password" required>
           @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
             @endif
          </div>
        </div>
        <div class="col-md-12">
          <div class="arrg-input">
           <input type="number" placeholder="Contact Number" id="phone_number"  name="phone_number"
           required autofocus>
           @if ($errors->has('phone_number'))
             <span class="text-danger">{{ $errors->first('phone_number') }}</span>
               @endif
          </div>
        </div>
        <div class="form-group mb-3">
            <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember Me</label>
            </div>
        </div>
        <div class="col-md-12">
          <div class="arrg-btnn">
           <button type="submit">Register</button>
          </div>
        </div>
      </div>
    </div>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>





@endsection
