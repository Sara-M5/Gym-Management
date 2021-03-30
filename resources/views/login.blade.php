<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gym Mangement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="main.js"></script>
</head>
<body>
    

<section class="black">


<div class="flex justify-center ">
<div class="log w-4/12 bg-white p-5 rounded-lg">


   <form action="{{route('index')}}" method="get" >
   @csrf

   <div class="m-5">
   <input type="email" name="email"placeholder="Write your email"  
   class=" border-2 rounded-lg p-3 w-full
    @error ('email') border-red-500 @enderror " values="old('name')" >

   @error('email')
   <div class="text-red-500 mt-2 text-sm">
       {{$message}}
   </div>
   @enderror
   </div>


   <div class="m-5">
   <label for="password" class="sr-only">Password</label>
   <input type="password" name="password"placeholder="Write your password"  
   class=" border-2 rounded-lg p-3 w-full
    @error ('password') border-red-500 @enderror" value="">

   @error('password')
   <div class="text-red-500 mt-2 text-sm">
       {{$message}}
   </div>
   @enderror
   </div>

<div class="m-5">
<button type="submit" class="btn2 p-3 border-2 w-full text-blue-400 rounded-lg ">Login</button>
</div>


   

   </form>
   </div>
   </div>

</div>
</section>
</body>
</html>