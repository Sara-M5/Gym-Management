
@extends('masterPage')
@section('content')

<form action="{{route('equipment')}}"method="post" class="m-5 bg-white"> 
<div class="row ml-3"><h1 class="h1 mt-4">Add New Equipment</h1></div>
@csrf
<div class="row">
<div class="col-6">

<div class="m-3">
<label for="name">Equipment Name:</label>
<input class="ml-3 p-2 "type="text" name="name" placeholder=".........................">
</div>


<div class="m-3">
<label for="desc">Description:</label>
<textarea class="form-control"name="description" id="" ></textarea>

</div>



<div class="m-3">
<label for="muscle">Muscles_Used:</label>
<input class="ml-3 p-2 "type="text"name="muscles_used" placeholder="........................">
</div>

<div class="m-3">
<label for="cost">Cost:</label>
<input class="ml-3 p-2 "type="text"name="cost" placeholder="......................">
</div>

</div>

<div class="col-6">

<div class="m-3">
<label for="photo">Photo:</label>
<input class="ml-3 "type="file"name="photo" placeholder="choose a photo">
</div>



</div>





</div>
<div class="row justify-content-end ">
<button type="submit"class="btn btn-outline-success mr-5 mb-5" onclick="success();">Save</button>

</div>
</form>
<span class="hidden">
  <div class="alert alert-success alert-dismissible p-5 "width="100px";>
            <button class="close" type="button" data-dismiss="alert">
                <span>&times;</span>
            </button>
           Equipment added succesfully
        </div></span>
@endsection