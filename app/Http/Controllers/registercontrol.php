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
    public function store(Request $request){
        $this->validate($request,[
            'type'=> 'required',
            'idno' => 'required',
            'name' => 'required',
            'bname' => 'required',
            'bid' => 'required'
        ]);

        if(request('type')=='F')
            $c=faculties::where('idno',request('idno'));
        else $c=students::where('idno',request('idno'));
        if($c->count()==1 and request('type')=='F'){
            $id=$c->first()->fid;
            $type='faculty';
            $check=faculty_bodies::where('bodyid',request('bid'))->count();
            $post=new faculty_bodies();
            $post->fid=$id;
        }
        elseif($c->count()==1 and request('type')=='S'){
            $id=$c->first()->sid;
            $type='student';
            $check=student_bodies::where('bodyid',request('bid'))->count();
            $post=new student_bodies();
            $post->sid=$id;
        }
        else{
            echo "<script>alert(\"idcard number not found\");</script>";
            return view('register');
        }
        if($check==1){
            echo "<script>alert(\"this idno is already present with that bodyid\");</script>";
            return view('Home');
        }

        
        $post->name=request('name');
        $post->idno=request('idno');
        $post->phno=request('phno');
        $post->bodyname=request('bname');
        $post->bodyid=request('bid');
        $post->ispaid='NO';
        $post->save();


        echo "<script>alert(\"Sucessfully submitted\");</script>";
        return view('Home');
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
