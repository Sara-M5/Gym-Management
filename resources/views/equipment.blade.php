
@extends('masterPage')
@section('content')

<div class="card">
<div class="card-header"><h1 class="h1">Equipment List</h1></div>


<div class="card-body">


 <table class="table table-hover table-light table-borderless p-4 table-responsive">

@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
<strong>{{session('success')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

@if(session('delete'))
<div class="alert alert-danger alert-dismissible" role="alert">
<strong>{{session('delete')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>


</button>
</div>
@endif

<thead >
<tr >
<th>id</th>
<th>Equipment Name</th>
<th>Description</th>
<th>Muscles Used</th>
<th>Cost</th>
<th>photo</th>
<th>Action</th>
</tr>
</thead>

@foreach($equipment as $show)
<tbody>
<tr scope="row">
<td>{{$show->id}}</td>
<td>{{$show->name}}</td>
<td>{{$show->description}}</td>
<td>{{$show->muscles_used}}</td>
<td>{{$show->cost}}</td>
<td><img src="/images/{{$show->photo}}" width="200px"; height="300px";alt=""></td>

<td>

    <div class="btn-group">
    <a href="equipment/edit/{{$show->id}}" class="btn btn-outline-success btn-xs">Edit</a>
    <a href="equipment/delete/{{$show->id}}" class="btn btn-outline-danger btn-xs">Delete</a>
   
    </div>

</td>

</tr>
</tbody>
@endforeach

</table>
<div>
<div class="mt-5">{{$equipment->links()}}</div>



@endsection