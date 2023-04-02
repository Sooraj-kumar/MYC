<?php

namespace App\Http\Controllers;

use App\Models\JobsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    public function index(){
        $job = DB::table('jobs')
                ->where('status','Active')
                ->get();
        return view('jobs',['jobs'=>$job]);
    }

    public function job_detail($id){
        $job_detail = DB::table('jobs')
                    ->where('id',$id)
                    ->first();
        return view('job_detail',compact('job_detail'));         
    }
}
