<?php 
namespace App\CustomServices;

use Illuminate\Support\Facades\DB;

class CustomServices{
    public function index(){
        $designation = DB::table('designation')
                        ->where('status','Active')
                        ->get();    
        $city = DB::table('cities')
                ->where('status','Active')
                ->get();     
    
    return ['designations'=>$designation,'cities'=>$city];             
    }
}