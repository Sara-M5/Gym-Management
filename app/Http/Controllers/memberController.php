<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
class memberController extends Controller
{
    public function show(){
        $member = member::paginate(4);
        return view('member',['member'=>$member]);
    }
    public function store(Request $request){
        $member = new member;
        $member->id=$request->id;
        $member->name=$request->name;
        $member->lname=$request->lname;
        $member->mobile=$request->mobile;
        $member->height=$request->height;
        $member->weight=$request->weight;
        $member->age=$request->age;
        $member->registered_on=$request->registered_on;
        $member->save();
        return redirect('member');
       }
     
       public function destory($member){
        member::find($member)->delete();
        return back()->with('delete', 'You deleted member');
    }

       public function search(){
       $search_text = $_GET['search'];
       $member = member::where('name','LIKE', '%'. $search_text )->get();
       return view('search',compact('member'));
}

       public function edit($id){
       $member = member::find($id);
       return view('updateMember', compact('member'));
}
       public function update(Request $request , $id){
       member::find($id)->update([
       'name' => $request->name,
       'lname' => $request->lname,
       'mobile' => $request->mobile,
       'height' => $request->height,
       'weight' => $request->weight,
       'age' => $request->age,
     'registered_on' => $request->registered_on,
    ]);
    return  redirect('member')->with('success', 'you Successfully updated Member');
    }
}
