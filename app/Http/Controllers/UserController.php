<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('admin.user.index',['users'=>$users]);

    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('user.index');
    }
}
