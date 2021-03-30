@extends('masterPage')
@section('content')


 <table class="table table-hover table-light table-borderless p-4 table-responsive">
@if(session('delete'))
<div class="alert alert-danger alert-dismissible" role="alert">
<strong>{{session('delete')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
@if(session('success'))
<div class="alert alert-success alert-dismissible" role="alert">
<strong>{{session('success')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<tr>
<th>id</th>
<th>Name</th>
<th>Last Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Photo</th>
<th>Action</th>
</tr>


@foreach($trainer as $show)
<tr>

<td class="text-center">{{$show->id}}</td>
<td>{{$show->name}}</td>
<td>{{$show->lname}}</td>
<td>{{$show->mobile}}</td>
<td>{{$show->email}}</td>
<td><img src="/images/{{$show->photo}}" alt="" width="80px" height="70px"></td>
<td>

    <div class="btn-group">
    <a href="trainer/edit/{{$show->id}}" class="btn btn-outline-success btn-xs">Edit</a>
    <a href="trainer/delete/{{$show->id}}" class="btn btn-outline-danger btn-xs">Delete</a>
  
    </div>
    
</td>


</tr>
</tbody>
@endforeach

</table>
<div class="mt-5">{{$trainer->links()}}</div>



</div>

@endsection