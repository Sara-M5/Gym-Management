<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
class trainerController extends Controller
{
    public function display(){
   
        $trainer = trainer::paginate(4);
        return view('trainer', ['trainer'=>$trainer]);
    }
    public function store(Request $request){
     $trainer = new trainer;
     $trainer->name=$request->name;
     $trainer->lname=$request->lname;
     $trainer->mobile=$request->mobile;
     $trainer->email=$request->email;
     $trainer->photo=$request->photo;
    
     $trainer->save();
     return redirect('trainer');
    }
  
    
    public function destory($trainer){
        trainer::find($trainer)->delete();
        return back()->with('delete', 'You deleted trainer');
    }


    public function edit($id){
        $trainer = trainer::find($id);
        return view('updateTrainer', compact('trainer'));
    }
    public function update(Request $request , $id){
        $trainer = trainer::find($id)->update([
     'name' => $request->name,
     'lname' => $request->lname,
     'mobile' => $request->mobile,
     'email' => $request->email,
     'photo' => $request->photo
    ]);
    $trainer->update();
    return redirect('trainer')->with('success', 'Successfully data updated');
    }
}
