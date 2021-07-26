<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){
        $allData = User::latest()->get();
        // $data['addData']  = User::all();
        return view('backend.user.view_user', compact('allData'));
    }
    public function UserAdd(){
        return view('backend.user.add_user');
    }
    public function UserStorage(Request $request){
        $validateDate = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Insert Successfully',
        );
        return redirect()->route('user.view')->with($notification);
    }
    public function UserEdit($id){
        $editData = User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }
    public function UserUpdate($id, Request $request){

        $data = User::find($id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        $notification = array(
            'message' => 'User Update Successfully',
        );
        return redirect()->route('user.view')->with($notification);
    }
    public function UserDelete($id){
        $delete = User::find($id)->delete();
        $notification = array(
            'message' => 'User Delete Successfully',
        );
        return redirect()->route('user.view')->with($notification);
    }
}
