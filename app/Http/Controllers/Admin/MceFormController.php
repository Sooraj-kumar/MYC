<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CitiesModel;
use App\Models\DegreesModel;
use App\Models\DesignationModel;
use Illuminate\Http\Request;


class MceFormController extends Controller
{
    public function index(){

        $degree = DegreesModel::all();
        $designation = DesignationModel::all();
        $city = CitiesModel::all();

        return view('admin.mce_form',['degrees'=>$degree, 'designations'=>$designation, 'cities'=>$city]);
    }

    public function add_designation(Request $request){

        $designation = new DesignationModel;
        $designation->designation_title = $request['designation-title'];
        $designation->status = "Active";

        $request->validate([
            'designation-title' => 'required|unique:designation,designation_title|max:30', 
        ]);

        if($designation->save()){
            return redirect('/admin/mce_form')->with('success','Designation added successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Designation not added');
        } 
    }

    public function add_city(Request $request){

        $city = new CitiesModel;
        $city->city_title = $request['city-title'];
        $city->status = "Active";

        $request->validate([
            'city-title' => 'required|unique:cities,city_title|max:30', 
        ]);

        if($city->save()){
            return redirect('/admin/mce_form')->with('success','City added successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','City not added');
        } 
    }

    public function add_degree(Request $request){

        $degree = new DegreesModel;
        $degree->degree_title = $request['degree-title'];
        $degree->status = "Active";

        $request->validate([
            'degree-title' => 'required|unique:degrees,degree_title|max:30', 
        ]);

        if($degree->save()){
            return redirect('/admin/mce_form')->with('success','Degree added successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Degree not added');
        } 
    }

    public function active_designation($designation_id){
        $designation = DesignationModel::where('designation_id',$designation_id)->update(["status" => "Active"]);    
        if($designation){
            return redirect('/admin/mce_form')->with('success','Designation activated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Designation not activated');
        }
    
    }

    public function inactive_designation($designation_id){
        $designation = DesignationModel::where('designation_id',$designation_id)->update(["status" => "InActive"]);    
        if($designation){
            return redirect('/admin/mce_form')->with('success','Designation inactivated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Designation not inactivated');
        }    
    }

    public function active_city($city_id){
        $city = CitiesModel::where('city_id',$city_id)->update(["status" => "Active"]);    
        if($city){
            return redirect('/admin/mce_form')->with('success','City activated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','City not activated');
        }
    
    }

    public function inactive_city($city_id){
        $city = CitiesModel::where('city_id',$city_id)->update(["status" => "InActive"]);    
        if($city){
            return redirect('/admin/mce_form')->with('success','City inactivated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','City not inactivated');
        }    
    }

    public function active_degree($degree_id){
        $degree = DegreesModel::where('degree_id',$degree_id)->update(["status" => "Active"]);    
        if($degree){
            return redirect('/admin/mce_form')->with('success','Degree activated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Degree not activated');
        }
    
    }

    public function inactive_degree($degree_id){
        $degree = DegreesModel::where('degree_id',$degree_id)->update(["status" => "InActive"]);    
        if($degree){
            return redirect('/admin/mce_form')->with('success','Degree inactivated successfully');
        }   
        else{
            return redirect('/admin/mce_form')->with('error','Degree not inactivated');
        }    
    }
}
