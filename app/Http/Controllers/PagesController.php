<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\events;
use App\registations;
use App\faculty_bodies;
use App\student_bodies;
use PDF;

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
    public function pdf($type,$bname){
        if($type=='F')
            $data=faculty_bodies::all();
           
        elseif($type=='S')
            $data=student_bodies::all();
        else
            return "something went wrong";
        $pdf = PDF::loadView('pdf', ['data'=> $data,'bname'=>$bname]);
        return $pdf->stream();
    }

    public function regremove($type,$bname,$id){
        if ($type=='student') {
            student_bodies::where('sid',$id)->where('bodyname',$bname)->delete();
            echo "<script>alert(\"removed successfully\");</script>";    
        }
        elseif ($type=='faculty') {
            faculty_bodies::where('fid',$id)->where('bodyname',$bname)->delete();
            echo "<script>alert(\"removed successfully\");</script>";
        }
        else
            return "something went wrong";
        header("location: http://wtbeta.com/admin/registrations");
        exit;
        
    }

    public function regmap(Request $request,$act,$type,$bname,$id){
        $this->validate($request,[
            'ispaid' => 'required',
            'phno' => 'required',
            'email' => 'required'
        ]);
        if ($act=='map') {
            if ($type=='student') {
                student_bodies::where('sid',$id)->where('bodyname',$bname)->update(['phno'=>request('phno'),'email'=>request('email'),'bodyid'=>request('bid'),'ispaid'=>request('ispaid')]);
                echo "<script>alert(\"updated successfully\");</script>";
                header("location: http://wtbeta.com/admin/registrations");
                exit;
            }
            elseif ($type=='faculty') {
                faculty_bodies::where('fid',$id)->where('bodyname',$bname)->update(['phno'=>request('phno'),'email'=>request('email'),'bodyid'=>request('bid'),'ispaid'=>request('ispaid')]);
                echo "<script>alert(\"updated successfully\");</script>";
                header("location: http://wtbeta.com/admin/registrations");
                exit;
            }
            else
                return "Something went wrong";
        }
        else
            return "something went wrong";
    }


    public function adminindex(){
        return view('admin.welcome');
    }
    public function adminreg(){
    	$reg1 =  faculty_bodies::all();
        $reg2=student_bodies::all();
        return view('admin.regview',['reg1' => $reg1])->with('reg2',$reg2);
    }

    public function adminfac($bname){
    	$reg =  faculty_bodies::all();
        return view('admin.facultyview',['bname'=>$bname])->with('reg',$reg);
    }
    public function adminstu($bname){
    	$reg =  student_bodies::all();
        return view('admin.studentview',['bname'=>$bname])->with('reg',$reg);
    }
    public function adminevent($act,$id){
           if($act=='view'){
        	    $events =  events::all();
                return view('admin.eventview',['events'=>$events,'act'=>$act ,'id'=>$id]);
            }
            elseif ($act=='editing' and $id!=0) {
                $events =  events::where('eid',$id)->first();
                return view('admin.eventview',['events'=>$events,'act'=>$act ,'id'=>$id]);
            }
            elseif ($act=='adding') {
                return view('admin.eventview',['act'=>$act ,'id'=>'new']);
            }
            elseif ($act=='remove') {
                events::where('eid',$id)->delete();
                header("location: http://wtbeta.com/admin/eventview/view/0");
                exit;
            }
            else
                return "something went wrong";


            
    }

     public function eventedit(Request $request,$act,$id){
        if($act=='edited'){
        events::where('eid',$id)->update(['title'=>request('title'),'description'=>request('des')]);
        header("location: http://wtbeta.com/admin/eventview/view/0");
        exit;
        }
        else{
            events::insert(['title'=>request('title'),'description'=>request('des')]);
            header("location: http://wtbeta.com/admin/eventview/view/0");
            exit;
        }

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
