<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\editEquipment;
use App\Models\Equipment;
class equipmentController extends Controller
{
    public function show(){
     $equipment=equipment::paginate(4);
        return view('equipment',['equipment'=>$equipment]);
    }
    public function store(Request $request){
     $equipment = new equipment;
     $equipment->id=$request->id;
     $equipment->name=$request->name;
     $equipment->description=$request->description;
     $equipment->muscles_used=$request->muscles_used;
     $equipment->cost=$request->cost;
     $equipment->photo=$request->photo;

     $equipment->save();
     return redirect('equipment');
    }

    public function destory($equipment){
        equipment::find($equipment)->delete();
        return back()->with('delete', 'You deleted equipment');
    }
    public function edit($id){
        $equipment=equipment::find($id);
        return view('updateEquipment', compact('equipment'));
    }

        public function update(Request $request , $id){
            equipment::find($id)->update([
             'name' => $request->name,
             'description' => $request->description,
             'muscles_used' => $request->muscles_used,
             'cost' => $request->cost,
             'photo' => $request->photo,
            ]);

            return back()->with('success', 'you successfully updated equipment');
            }
}
