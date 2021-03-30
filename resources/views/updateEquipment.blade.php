
@extends('masterPage')
@section('content')



<div class="card">
<div class="card-header"><h1 class="h1">Update Equipment</h1></div>


<div class="card-body">


<form action="{{route('equipment'),$equipment->id}}"method="post" class="m-2 bg-white">
@csrf

<div class="row">
    
<div class="col-7">


<div class="m-3">
<label for="name">Equipment Name:</label>
<input class="ml-3 p-2 "type="text"value="{{$equipment->name}}"  name="name"placeholder=".........................">
</div>


<div class="m-3">
<label for="desc">Description:</label>
<textarea class="form-control" id=""value="{{$equipment->description}}"name="description" ></textarea>

</div>


<div class="m-3">
<label for="muscle">Muscles_Used:</label>
<input class="ml-3 p-2 "type="text"name="muscles_used"value="{{$equipment->muscles_used}}" placeholder="........................">
</div>

<div class="m-3">
<label for="cost">Cost:</label>
<input class="ml-3 p-2 "type="text"name="cost" value="{{$equipment->cost}}"placeholder="......................">
</div>

</div>

<div class="col-5">

<div class="m-3">
<label for="photo">Photo:</label>
<input class="ml-3 "type="file"name="photo" value="{{$equipment->photo}}"placeholder="choose a photo">
</div>





<div class="row justify-content-end">
<button type="submit"class="btn btn-outline-success m-5 ">Update</button>

</div>
</div>

</div>
</div>
</div>
</div>

</form>
@endsection

