
@extends('masterPage')
@section('content')

<form action="{{route('index')}}"method="post" class="m-5 bg-white">
@csrf
<div class="row ml-3"><h1 class="h1 mt-4">Add Member's Payment</h1></div>
<div class="row">
    
<div class="col-7">

<div class="m-3">
<label for="">Member Id:</label>
<input class="m-3 p-2 "type="number" name="member_id" placeholder="........................">
</div>

<div class="m-3">
<label for="">Photo:</label>
<input class="m-3 p-2 "type="file" name="photo" >
</div>




<div class="m-3">
<label for="">Payment:</label>
<input class="ml-3 p-2 "type="text"  name="payment"placeholder="........................">
</div>



</div>

<div class="col-5">

<div class="m-3">
<label for="">Date:</label>
<input class="ml-3 p-2 "type="date" name="date" placeholder="......................">
</div>




<div class="row justify-content-end m-5">
<button type="submit"class="btn btn-outline-success mr-5 mt-5">Save</button>

</div>

</div>


</div>

</form>
@endsection