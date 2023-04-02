<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\DesignationModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MCEProfileModel;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class UserMCEProfileController extends Controller
{
    public function index(){
        return view('user.mce_profile');
    }

    public function mce_form(){
        $designation = DB::table('designation')
                        ->where('status','Active')
                        ->get();
        $city = DB::table('cities')
                        ->where('status','Active')
                        ->get();
        $degree = DB::table('degrees')
                        ->where('status','Active')
                        ->get();
        return view('user.mce_form',['designations'=>$designation,'cities'=>$city,'degrees'=>$degree]);
    }
    public function submit_mce_profile(Request $request){
        // dd($request->all());
        // dd(Auth()->user());
       
        $user_id = Auth()->user()->id;

        if($request->hasFile('mce_profile_image')){
            
            $image_name = $request->file('mce_profile_image')->hashName();
            $image_path = $request->file('mce_profile_image')->storeAs('mce_profiles',$image_name,'public');
            
            $data = $request->all();
            $data['mce_profile_image'] = $image_path;
            $data['user_id'] = $user_id;
            $mce_profile = MCEProfileModel::create($data);
            $mce_profile->save();
        }
        return redirect('/user/mce_profile')->with('success','Your application submitted successfully');
    }
}
