<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MCEProfileModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminMceProfileController extends Controller
{
    public function index(){
        $mce_profile = DB::table('mce_profile')
                        ->join('designation','mce_profile.designation_id','=','designation.designation_id')
                        ->select('mce_profile.*','designation.designation_title')->get();
        return view('admin.mce_profile',['mce_profiles'=>$mce_profile]);
    }

    public function view_mce_profile($mce_profile_id){
        $mceProfile = DB::table('mce_profile')
                    ->leftJoin('designation', 'mce_profile.designation_id','=','designation.designation_id')
                    ->leftJoin('cities', 'mce_profile.city_id','=','cities.city_id')
                    ->leftJoin('degrees','mce_profile.degree_id','=','degrees.degree_id')
                    ->select('mce_profile.*','designation.designation_title','cities.city_title','degrees.degree_title')
                    ->where('mce_profile.mce_profile_id','=',$mce_profile_id)
                    ->get();
                    return view('admin.view_mce_profile',compact('mceProfile'));
    }
    public function review_mce_profile(Request $request, $mce_profile_id){
        $request->validate([
            'review' => 'required',
            'review_status' => 'required'
        ]);
        $query = DB::table('mce_profile')
        ->where('mce_profile_id',$mce_profile_id)            
        ->update(['review'=>$request->review, 'status'=>$request->review_status]);
        
        return redirect('/admin/mce_profile')->with('success','Reviewed updated successfully');
             
    }




}
