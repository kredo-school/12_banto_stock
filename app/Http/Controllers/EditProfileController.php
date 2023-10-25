<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EditProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('EditProfile.index',compact('users'));
    }
    public function edit($id)
{
    return view('EditProfile.edit', compact('users'));
}
public function update(Request $request, $id)
{
    $student = Student::find($id);
    $student->name = $request->input('name');
    $student->email = $request->input('email');
    $student->course = $request->input('course');
    $student->section = $request->input('section');
    $student->update();
    return redirect()->back()->with('status','Student Updated Successfully');
}
}

    $query = DB::table('users')->insert([
        'EmployeeNumber' ->$request->input('EmployeeNumber'),
        'name'->$request->input('name'),
        'BranchName'->$request->input('BranchName'),
    ]);
    if($query){
        return back()->with('success');
    }
}

