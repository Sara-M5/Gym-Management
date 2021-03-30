
@extends('masterPage')
@section('content')



 <table class="table table-hover table-light table-borderless p-4 table-responsive">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Last_name</th>
<th>Mobile</th>
<th>Height</th>
<th>Weight</th>
<th>Age</th>
<th>Photo</th>
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
<td><img src="/images/{{$show->photo}}" alt="" width="70px" height="70px"></td>
<td>{{$show->registered_on}}</td>


<td>
    
<div class="btn-group">  
<form action="delete/{{$show->id}}" method="post">
@method('DELETE')
@csrf
<button class="btn btn-outline-danger" type="submit">Delete</button>

</form>
    
    <a href="edit/{{$show->id}}" class="btn btn-outline-success btn-xs">Edit</a>
    </div>
</td>

</tr>
</tbody>
@endforeach

        </table>
      
        
@endsection