<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;
class indexController extends Controller
{
    public function show(){

    $index = index::paginate(3);
    return view('index', ['index'=>$index]);
}
    public function store(Request $request){
    $index = new index;
    $index->member_id = $request->member_id;
    $index->photo = $request->photo;
    $index ->payment = $request->payment;
    $index ->date = $request->date;

    $index ->save();
    return redirect('index');
    }

}
