<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gym Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
     <link rel="stylesheet" href="/css/style.css">
 
</head>
<body class="baner">


    <nav class="navbar navbar-expand-sm m-5  ">
          <div class="navbar-header">
           <h1 class="h1 navbar-brand" >Gym Management</h1>
          </div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
           
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            
                <ul class="nav navbar-nav ml-auto ">
                    <li class="active nav-item">
                        <a class="nav-link mx-2 p-2" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mx-2 p-2" href="{{route('member')}}">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 p-2" href="{{route('trainer')}}">Trainer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 p-2" href="{{route('equipment')}}">Equipment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 p-2" href="{{route('payment')}}">Payment</a>
                    </li>
                </ul>
            </div>
   
    </nav>


<div class="container well">

@yield('content')

</div>




<script src="/bootstrap/slim.min.js"></script>
<script src="/bootstrap/popper.min.js"></script>
<script src="/bootstrap/bootstrap.min.js"></script>


</body>
</html>