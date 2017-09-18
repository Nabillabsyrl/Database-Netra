
@extends('layout.rootPage')
@section('content')

<body style="background-color: white">
  
<div class="container">
  <div class="info">
    <h1 class="header"> LOGIN PAGE </h1>

   <!-- <span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Billa</a></span> -->
   <span> </span>
  </div>
</div>          
<div class="form">


  <div class="thumbnail"><img src="{{url('assets/logofix.png')}}"/></div>
           <div class="alert"> 
</div>
  
  <form class="login-form" role="form" method="post" action="<?php echo base_url();?>index.php/admin/login">

    <input type="text" placeholder="Username" name="username" class="input_with_text" />
    <input type="password" placeholder="Password" name="password" class="input_with_text" />

    <button type="submit" name="submit" class="button">Login</button>
   
  </form>
</div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="{{url('assets/js/index.js')}}"></script>

</body>
@endsection