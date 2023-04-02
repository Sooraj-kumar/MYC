<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminInvitationController extends Controller
{
    public function index(){
        return view('admin.invitation');
    }

    public function add_new_invitation(){
        return view('admin.add_new_invitation');
    }

    public function add_invitation(Request $request){
        dd($request->all());
        die();
    }
}
