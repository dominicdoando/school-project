<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function ViewProfile(){
        $id = AUth::user()->id;
        $user = User::find($id);

        return view('backend.user.view_profile', compact('user'));
    }
    public function EditProfile(){
        $id = AUth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit_profile', compact('editData'));
    }
    public function StorageProfile(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;

        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('upload/user_images'),$fileName);
            $data['image'] = $fileName;

         }
         $data->save();
         $notification = array(
            'message' => 'Profile Update Successfully',
        );
        return redirect()->route('profile.view')->with($notification);
    }
    public function PasswordView(){
        return view('backend.user.edit_password');
    }
    public function PasswordUpdate(Request $request){
        $valiadateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            AUth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }
}
