<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        // dd($user);
        return view('user.profile',$user);
    }
}
