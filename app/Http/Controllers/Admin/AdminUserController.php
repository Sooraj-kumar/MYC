<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function users(){

        $user = User::all();
        return view('admin.users',['users' => $user]);

    }
    public function inactive_user($user_id){
        $inactive_user = User::where('id',$user_id)->update(["status" => "InActive"]);    
        if($inactive_user){
            return redirect('/admin/users')->with('success','User inactivated successfully');
        }   
        else{
            return redirect('/admin/users')->with('error','User not inactivated');
        }    
    }

    public function active_user($user_id){
        $active_user = User::where('id',$user_id)->update(["status" => "Active"]);    
        if($active_user){
            return redirect('/admin/users')->with('success','User activated successfully');
        }   
        else{
            return redirect('/admin/users')->with('error','User not activated');
        }
    
    }

}
