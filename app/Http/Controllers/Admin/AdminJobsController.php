<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminJobsController extends Controller
{
    public function index(){
        $jobs = JobsModel::all(); 
        return view('admin.jobs',['jobs'=>$jobs]);
    }

    public function add_new_job(){
        return view('admin.add_new_job');
    }

    public function add_job(Request $request){
        // dd($request->all());
        $add_job = new JobsModel();
        
        $file_name = time().'_'.$request->upload_file->getClientOriginalName();
        $file_path = $request->file('upload_file')->storeAs('jobs', $file_name, 'public');        
        
        $add_job->job_title = $request->job_title;
        $add_job->required_skills = $request->required_skills;
        $add_job->department = $request->department;
        $add_job->job_category = $request->job_category;
        $add_job->qualification = $request->qualification;
        $add_job->experience = $request->experience;
        $add_job->location = $request->location;
        $add_job->age_limit = $request->age_limit;
        $add_job->vacancies = $request->vacancies;
        $add_job->posted_on = $request->posted_on;
        $add_job->last_date = $request->last_date;

        $add_job->advertisement = '/storage/'.$file_path;
        $add_job->status = 'Active';
        $add_job->save();
        if($add_job->save()){
            return redirect('/admin/jobs')->with('success','Job added successfully');    
        }
        else{
            return redirect('admin/jobs')->with('error','Job not added');
        }
    }

    public function active_job($id){
        $job = JobsModel::where('id',$id)->update(["status" => "Active"]);    
        if($job){
            return redirect('/admin/jobs')->with('success','Job activated successfully');
        }   
        else{
            return redirect('/admin/jobs')->with('error','Job not activated');
        } 
    }

    public function inactive_job($id){
        $job = JobsModel::where('id',$id)->update(["status" => "InActive"]);    
        if($job){
            return redirect('/admin/jobs')->with('success','Job inactivated successfully');
        }   
        else{
            return redirect('/admin/jobs')->with('error','Job not inactivated');
        } 
    }

    public function edit_job($id){
        $job = JobsModel::find($id);
               
        return view('admin.edit_job',compact('job'));
    }

    public function update_job(Request $request, $id){
        // dd($request->all());
        $job = JobsModel::find($id);
        $job->job_title = $request->job_title;
        $job->required_skills = $request->required_skills;
        $job->department = $request->department;
        $job->job_category = $request->job_category;
        $job->qualification = $request->qualification;
        $job->experience = $request->experience;
        $job->location = $request->location;
        $job->age_limit = $request->age_limit;
        $job->vacancies = $request->vacancies;
        $job->posted_on = $request->posted_on;
        $job->last_date = $request->last_date;
        
        if($request->file('advertisement')){
            $file_name = $request->file('advertisement')->hashName();
            $file_path = $request->file('advertisement')->storeAs('jobs',$file_name,'public');

            $job['advertisement'] = $file_path;
        }
        else{
            unset($request->advertisement);
        }
        $job->update();

        return redirect('/admin/jobs')->with('success','Job updated successfully');

    }
}
