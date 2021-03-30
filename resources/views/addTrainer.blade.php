
@extends('masterPage')
@section('content')

<form action="{{route('trainer')}}"method="post" class="m-5 bg-white">
@csrf
<div class="row ml-3"><h1 class="h1 mt-4">Add New Trainer</h1></div>
<div class="row">
    
<div class="col-5">


<div class="m-3">
<label for="name">Name:</label>
<input class="ml-3 p-2 "type="text" name="name"placeholder=".........................">
</div>


<div class="m-3">
<label for="lname">Last Name:</label>
<input class="ml-3 p-2"type="text" name="lname" placeholder=".....................">
</div>



<div class="m-3">
<label for="">Mobile:</label>
<input class="ml-3 p-2 "type="number"  name="mobile"placeholder="........................">
</div>

<div class="m-3">
<label for="">Email:</label>
<input class="ml-3 p-2 "type="email" name="email" placeholder="......................">
</div>

</div>

<div class="col-7">
<div class="m-3">
<label for="">Photo:</label>
<input class="m-3 p-2 "type="file" name="photo" >
</div>




<div class="row justify-content-end">
<button type="submit"class="btn btn-outline-success m-5">Add</button>

</div>

</div>


</div>

</form>
@endsection