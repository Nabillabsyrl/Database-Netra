
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="">
  

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{url('/css/style1.css')}}">

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


  <div class="thumbnail"><img src="{{url('images/logofix.png')}}"/></div>
           <div class="alert"> 
</div>
  
  <form class="login-form" role="form" method="post" action="{{route('login')}}">
    {!!csrf_field()!!}

    <input type="text" placeholder="Username" name="username" class="input_with_text" />
    <input type="password" placeholder="Password" name="password" class="input_with_text" />

    <button type="submit" name="submit" class="button">Login</button>
   
  </form>
</div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="{{url('js/index.js')}}"></script>

</body>
</html>