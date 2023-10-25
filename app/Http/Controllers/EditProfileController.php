<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class EditProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('editProfile',compact('users'));
    }
    public function edit($id)
{
    return view('editProfile.edit', compact('users'));
}
public function update(Request $request, $id)
{
    $users = user::find($id);
    $users-> EmployeeNumber= $request->input('EmployeeNumber');
    $users-> name = $request->input('name');
    $users-> BranchName = $request->input('BranchName');
    $users-> gender= $request->input('gender');
    $users-> email = $request->input('email');
    $users-> BirthDate = $request->input('BirthDate');
    $users-> address = $request->input('address');
    $users ->update();
    return redirect()->back()->with('status','Users Updated Successfully');
}
}
