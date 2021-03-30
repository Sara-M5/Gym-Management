@extends('masterPage')
@section('content')
 <div class="row">
 <div class="col-8">


        <table class="table table-borderless table-light table-responsive">
            <thead>
                <tr class="row ml-3  mt-4" >
                    <th class="col">M_id</th>
                    <th class="col">Photo</th>
                    <th class="col">Payment</th>
                    <th class="col">Date</th>
                </tr>
            </thead>
            
            
@foreach($index as $show)
            <tbody>
                <tr class="row ml-3" style="height:90px;">
                    <th class="col align-self-center">{{$show->member_id}}</th>
                    <td class="col align-self-center "><img src="/images/{{$show->photo}}" alt="" class="mem"></td>
                    <td class="col align-self-center">{{$show->payment}}</td>
                    <td class="col align-self-center ">{{$show->date}}</td>
                </tr>
               
            </tbody>
            @endforeach
        </table>

 <div class="mt-5">{{$index->links()}}</div>



</div>

    


 <div class="col-4">
   <form action="{{route('search')}}" type="get">
        <div class="input-group">
             <input type="search" name="search" class="form-control mr-sm-2"
             placeholder="Search Member" > 
              <div class="input-group-append">
              
                
                       <button class="btn btn1 " type="submit">Search</button>
                     
                </div>
        </div>
    </form>
       

    
    <div class="row">
    
    <button class="btn2 btn mx-3 mt-5 p-3  w-full"><a href="{{route('addTrainer')}}"class="link text-white ">  Add New Trainer</a></button>
    
</div>
  <div class="row ">
<button class="btn2 btn m-3 p-3 w-full"><a href="{{route('addMember')}}"class="link text-white">Add New Member</a></button>
</div>
<div class="row">
<button class=" btn2 btn mx-3 p-3  w-full"><a href="{{route('addEquipment')}}" class="link text-white">Add New Equipment</a></button>
    </div>



</div>
</div>
@endsection
  
 

