<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use App\registations;
use App\faculty_bodies;
use App\student_bodies;

class PagesController extends Controller
{
    public function index(){
        return view('adminlogin');
    }
    public function regindex($type){
        return view('register',['type'=>$type]);
    }
    public function eventindex(){
    	$events=  events::all();
        return view('events')->with('events',$events);
    }
    public function adminindex(){
        return view('admin.welcome');
    }
    public function adminreg(){
    	$reg1 =  faculty_bodies::all();
        $reg2=student_bodies::all();
        return view('admin.regview',['reg1' => $reg1])->with('reg2',$reg2);
    }

    public function adminfac(){
    	$reg =  faculty_bodies::all();
        return view('admin.facultyview')->with('reg',$reg);
    }
    public function adminstu(){
    	$reg =  student_bodies::all();
        return view('admin.studentview')->with('reg',$reg);
    }
    public function adminevent(){
    	$events =  events::all();
        return view('admin.eventview')->with('events',$events);
    }


    public function adminregpaid(Request $request){
    	$d=registations::where('id',request('id'))->first();
    	if (request('type')=='faculty'){
    		$post=new faculty_bodies();
    		$post->fid=request('id');
    	}
    	else{
    		$post=new student_bodies();
    		$post->sid=request('id');
    	}
    	$post->name=$d->name;
    	$post->idno=$d->idno;
    	$post->bodyname=$d->bname;
    	$post->bodyid=$d->bid;
    	$post->save();
    	$d->delete();
    	$reg =  registations::all();
        return view('admin.regview')->with('reg',$reg);



    }
    
    
}
