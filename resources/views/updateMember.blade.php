
@extends('masterPage')
@section('content')

<div class="card">
<div class="card-header"><h1 class="h1">Update Member</h1></div>

@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
<strong>{{session('success')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">$times;</span>
</button>
</div>
@endif
<div class="card-body">


<form action="{{route('member'),$member->id}}"method="post" class="m-2 bg-white"
enctype="multipart/form-data"> 

@csrf
<div class="row">
<div class="col-5">

<div class="m-3">
<label for="name">Name:</label>
<input class="ml-3 p-2 "type="text"value="{{$member->name}}" name="name"placeholder=".........................">
</div>


<div class="m-3">
<label for="lname">Last Name:</label>
<input class="ml-3 p-2"type="text"value="{{$member->lname}}"  name="lname" placeholder=".....................">
</div>


<div class="m-3">
<label for="mobile">Mobile:</label>
<input class="ml-3 p-2" type="number"name="mobile"value="{{$member->mobile}}"  placeholder=".....................">

</div>

<div class="m-3">
<label for="height">Height:</label>
<input class="ml-3 p-2 "type="number" value="{{$member->height}}"name="height" placeholder="........................">
</div>

<div class="m-3">
<label for="weight">Weight:</label>
<input class="ml-3 p-2 "type="number" value="{{$member->weight}}"name="weight"placeholder="......................">
</div>

</div>

<div class="col-7">

<div class="m-3">
<label for="age">Age:</label>
<input class="ml-3 p-2"type="number"value="{{$member->age}}"name="age" placeholder="......................">
</div>



<div class="m-3">
<label for="">Registered on:</label>
<input class="ml-3 p-2"type="date"name="registered_on"value="{{$member->registered_on}}" placeholder="......................">
</div>


<div class="row justify-content-end ">
<button type="submit"class="btn btn-outline-success mr-5">Update</button>

</div>

</div>
</form>
</div>
</div>
@endsection