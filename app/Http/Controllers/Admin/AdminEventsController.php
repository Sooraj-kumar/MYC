<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEventsController extends Controller
{
    public function index(){
        $event = EventsModel::all();
        return view('admin.events',['events'=>$event]);
    }

    public function add_new_event(){
        return view('admin.add_new_event');
    }

    public function add_event(Request $request){

        $validated = $request->validate([
            'event_title' => 'required|max:100',
            'feature_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_address' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('feature_image')){
            // request("featuer_image"
            // request()->filled("featuser_image")
            $name = $request->file('feature_image')->hashName(); 
            $file_path = $request->file('feature_image')->storeAs('events',$name,'public');

            $data =  $request->all();
            $data["status"] = "Active";
            $data["feature_image"] = $name;
            $event = EventsModel::create($data);
            $event->save();
        }
        return redirect('/admin/add_new_event')->with('success','Event addred successfully');
    }

    public function edit_event($id){
        $event = EventsModel::find($id);
        // dd($event);
        return view('admin.edit_event',compact('event'));
    }

    public function update_event(Request $request, $id){

        $event = EventsModel::find($id);
        $event->event_title = $request->event_title;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->event_address = $request->event_address;
        $event->description = $request->description;

        if($request->file('feature_image')){
            $file_name = $request->file('feature_image')->hashName();
            $file_path = $request->file('feature_image')->storeAs('events',$file_name,'public');
            $event['feature_image'] = $file_path;
        }
        else{
            unset($request->feature_image);
        }
        $event->update();
        
        return redirect('/admin/events')->with('success','Event updated successfully');        

    }

    public function inactive_event($id){
        $event = EventsModel::where('id',$id)->update(["status" => "InActive"]);    
        if($event){
            return redirect('/admin/events')->with('success','Event inactivated successfully');
        }   
        else{
            return redirect('/admin/events')->with('error','Event not inactivated');
        }    
    }

    public function active_event($id){
        $event = EventsModel::where('id',$id)->update(["status" => "Active"]);    
        if($event){
            return redirect('/admin/events')->with('success','Event activated successfully');
        }   
        else{
            return redirect('/admin/events')->with('error','Event not activated');
        }
    
    }
}
