
@extends('masterPage')
@section('content')


<div class="card">
<div class="card-header"><h1 class="h1">Update Trainer</h1></div>
<div class="card-body">

<form action="{{route('trainer'),$trainer->id}}"method="post" class="m-2 bg-white">
@csrf

<div class="row">
    
<div class="col-5">


<div class="m-3">
<label for="name">Name:</label>
<input class="ml-3 p-2 "type="text"value="{{$trainer->name}}" name="name"placeholder=".........................">
</div>


<div class="m-3">
<label for="lname">Last Name:</label>
<input class="ml-3 p-2"type="text"value="{{$trainer->lname}}"  name="lname" placeholder=".....................">
</div>



<div class="m-3">
<label for="">Mobile:</label>
<input class="ml-3 p-2 "type="number"value="{{$trainer->mobile}}"   name="mobile"placeholder="........................">
</div>

<div class="m-3">
<label for="">Email:</label>
<input class="ml-3 p-2 "type="email" name="email" value="{{$trainer->email}}" placeholder="......................">
</div>

</div>

<div class="col-7">
<div class="m-3">
<label for="">Photo:</label>
<input class="m-3 p-2 "type="file"value="{{$trainer->photo}}"  name="photo" >
</div>




<div class="row justify-content-end">
<button type="submit"class="btn btn-outline-success m-5">Update</button>

</div>

</div>
</div>
</div>
</div>

</form>
@endsection