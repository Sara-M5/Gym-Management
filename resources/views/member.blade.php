
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
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Last_name</th>
<th>Mobile</th>
<th>Height</th>
<th>Weight</th>
<th>Age</th>
<th>Registered_on</th>
<th>Action</th>
</tr>
</thead>
       
               
@foreach($member as $show)
<tbody>
    
<tr>
<td>{{$show->id}}</td>
<td>{{$show->name}}</td>
<td>{{$show->lname}}</td>
<td>{{$show->mobile}}</td>
<td>{{$show->height}}</td>
<td>{{$show->weight}}</td>
<td>{{$show->age}}</td>
<td>{{$show->registered_on}}</td>
<td>
    
<div class="btn-group">  

     <a href="edit/{{$show->id}}" class="btn btn-outline-success btn-xs">Edit</a>
    <a href="delete/{{$show->id}}" class="btn btn-outline-danger btn-xs">Delete</a>
    </div>
</td>

</tr>
</tbody>
@endforeach

        </table>
        <div class="mt-5">{{$member->links()}}</div>
        

        
@endsection
