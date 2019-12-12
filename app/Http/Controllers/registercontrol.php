<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registations;
use App\students;
use App\faculties;
use App\Comments;
use App\faculty_bodies;
use App\student_bodies;

class registercontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "<h1>register page coming soon</h1>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$type){
        $this->validate($request,[
            'idno' => 'required',
            'name' => 'required',
            'bname' => 'required',
            'phno' => 'required',
            'email' => 'required'
        ]);

        if($type=='Student'){
            $c=students::where('idno',request('idno'))->where('name',request('name'))->where('email',request('email'));
        }
        else{
            $c=faculties::where('idno',request('idno'))->where('name',request('name'))->where('email',request('email'));
        }
        if ($c->count()==1 and $type=='Student') {
       
            $id=$c->first()->sid;
            $check=student_bodies::where('idno',request('idno'))->where('bodyname',request('bname'));
            $post=new student_bodies();
            $post->sid=$id;
        }
        elseif($c->count()==1 and $type=='Faculty') {
       
            $id=$c->first()->fid;
            $check=faculty_bodies::where('idno',request('idno'))->where('bodyname',request('bname'));
            $post=new faculty_bodies();
            $post->fid=$id;
        }
        else{
            //similarly i should check for all inputs like name emailid etc
            echo "<script>alert(\"idcard number with that details not found\");</script>";
            return "<script>window.history.back();</script>";
        }
        if($check->count()==1){
            echo "<script>alert(\"this idno is already present with that bodyname\");</script>";
            return "<script>location.replace(\"http://wtbeta.com\");</script>";
        }
        

        
        $post->name=request('name');
        $post->idno=request('idno');
        $post->phno=request('phno');
        $post->bodyname=request('bname');
        $post->email=request('email');
        $post->ispaid='NO';
        $post->save();


        echo "<script>alert(\"Sucessfully submitted\");</script>";
        return "<script>location.replace(\"http://wtbeta.com\");</script>";
    }
    public function regindex(){
        return view('register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
