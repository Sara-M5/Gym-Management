
@extends('masterPage')
@section('content')

<form action="{{route('member')}}"method="post" class="m-5 bg-white"
enctype="multipart/form-data"> 
<div class="row ml-3"><h1 class="h1 mt-4">Add New Member</h1></div>
@csrf
<div class="row">
<div class="col-5">

<div class="m-3">
<label for="name">Name:</label>
<input class="ml-3 p-2 "type="text"name="name"  placeholder=".........................">
</div>


<div class="m-3">
<label for="lname">Last Name:</label>
<input class="ml-3 p-2"type="text" name="lname"placeholder=".....................">
</div>

<div class="m-3">
<label for="mobile">Mobile:</label>
<input class="ml-3 p-2"type="number"name="mobile" placeholder=".....................">

</div>

<div class="m-3">
<label for="height">Height:</label>
<input class="ml-3 p-2 "type="number"name="height" placeholder="........................">
</div>

<div class="m-3">
<label for="weight">Weight:</label>
<input class="ml-3 p-2 "type="number" name="weight"placeholder="......................">
</div>

</div>

<div class="col-7">

<div class="m-3">
<label for="age">Age:</label>
<input class="ml-3 p-2"type="number"name="age" placeholder="......................">
</div>


<div class="m-3">
<label for="">Registered on:</label>
<input class="ml-3 p-2"type="date"name="registered_on"placeholder="......................">
</div>


<div class="row justify-content-end ">
<button type="submit"class="btn btn-outline-success mr-5">Add</button>

</div>

</div>
</form>
@endsection