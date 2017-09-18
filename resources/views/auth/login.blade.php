@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>

      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
  

  <link rel='stylesheet prefetch' href="{{url('https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900')}}">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>

<body style="background-color: white">
  
<div class="container">
  <div class="info">
    <h1 class="header"> LOGIN PAGE </h1>

   <!-- <span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Billa</a></span> -->
   <span> </span>
  </div>
</div>          
<div class="form">


  <div class="thumbnail"><img src="{{url('assets/logofix.png')}}"/>
  </div>
         @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><strong> {{ $error }} </strong></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('status'))
                    <div class="alert alert-{{session('status')}}">
                        {{session('message')}}
                    </div>
                @endif
</div>

  <form class="login-form" role="form" method="POST" action="{{route('login')}}">

    <input type="text" placeholder="Username" class="input_with_text" name="username" placeholder="Username" value="{{old('username')}}" />
       <span class="glyphicon glyphicon-user form-control-feedback "></span>
               
    <input type="password" placeholder="Password" name="password" class="input_with_text" autocomplete="off" />
     <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    <button type="submit" name="submit" class="button">Login</button>
   
  </form>

  <div class="lockscreen-footer text-center" style="padding-top: 10px">
            <strong>Copyright © 2017 TELKOM INDONESIA.</strong><br>
            <strong>All rights reserved</strong><br>
           
        </div>
</div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/js/index.js"></script>

</body>
</html>

@endsection
