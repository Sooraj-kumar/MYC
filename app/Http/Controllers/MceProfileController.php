<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomServices\CustomServices;

class MceProfileController extends Controller
{
    // public $service;
    // public function __construct(CustomServices $s)
    // {
    //     $this->service = $s;
    // }
    public function index(){
        $designation = DB::table('designation')
                        ->where('status','Active')
                        ->get();    
        $city = DB::table('cities')
                ->where('status','Active')
                ->get();
                    
        return view('mce_profiles',['designations'=>$designation,'cities'=>$city]);
    }

    public function serach_profiles(Request $request){

        $designation_id = $request->designation_id;
        $city_id = $request->city_id;

        $designation = DB::table('designation')
                        ->where('status','Active')
                        ->get();    
        $city = DB::table('cities')
                ->where('status','Active')
                ->get();

        $profile_record = DB::table('mce_profile')
                        ->Join('designation','mce_profile.designation_id','=','designation.designation_id')
                        ->where([
                            ['mce_profile.designation_id','=',$designation_id],
                            ['mce_profile.city_id','=',$city_id],
                            ['mce_profile.status','=','Approved'],
                        ])
                        ->select('mce_profile.*','designation.designation_title')
                        ->get();
        // dd($profile_record);
        return view('mce_profiles')->with(['profile_records'=>$profile_record, 'designations'=>$designation, 'cities'=>$city]);
        
    }

    public function view_mce_profile($id){
        // dd($id);
        $profile_record = DB::table('mce_profile')
        ->Join('designation','mce_profile.designation_id','=','designation.designation_id')
        ->Join('cities','mce_profile.city_id','=','cities.city_id')
        ->Join('degrees','mce_profile.degree_id','=','degrees.degree_id')
        ->where([
            ['mce_profile.mce_profile_id','=',$id],
        ])
        ->select('mce_profile.*','designation.designation_title','cities.city_title','degrees.degree_title')
        ->first();
    // dd($profile_record);
    return view('view_mce_profile',compact('profile_record'));
    }
}
