<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EditProfileController extends Controller
{
    public function index(){
        return view('EditProfile');
    }
}

    function add(Request $request){
    $request->validate([
        'EmployeeNumber'=>'required',
        'name'=>'required',
        'BranchName'=>'required',
    ]);

    $query = DB::table('users')->insert([
        'EmployeeNumber' ->$request->input('EmployeeNumber'),
        'name'->$request->input('name'),
        'BranchName'->$request->input('BranchName'),
    ]);
    if($query){
        return back()->with('success');
    }
}

