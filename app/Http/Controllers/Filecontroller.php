<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Filecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return view('file');
        // 设置cookie
        // return response('gogogo')->withCookie('id',10,1);
        // echo $request->cookie('id');
        // 设置cookie2
        // \Cookie::queue('name','iloveyou',10);
        // echo $request->cookie("name");
        // return response()->json(['a'=>100,'b'=>200]);
        // return response()->download('./uploads/1.png');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('sc')) {
            $name=time()+rand(1,10000);
            $ext=$request->file("sc")->getClientOriginalExtension();
            // dd($ext);
            $request->file('sc')->move("./uploads",$name.".".$ext);
        }
        
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
