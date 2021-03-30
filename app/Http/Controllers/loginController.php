<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class loginController extends Controller
{
    public function _construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('login');
    }

    public function store(Request $request){

    $this->validate($request, [
    'email'=>'required|email',
    'password'=>'required', 
    ]);

    if(!auth()->attempt($request->only('email', 'password'))){
        return back()->with('success','Invalid Login');
    }
  
    return redirect()->route('index');
    }
}
