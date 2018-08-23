<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reqcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // var_dump($request);
    // 基本信息获取
        // 请求路径
        // $path=$request->path();
        // 获取完整url
        // $url=$request->url();
        // 获取请求方法
        // $method=$request->method();
        // 检测方法
        // $fangfa=$request->isMethod('post');
    // 提取请求参数
        //基本获取
        // $name=$request->input("name");
        // 设置默认值
        // $name=$request->input('name','sally');
        // 检测是否存在
        // $varify=$request->has('name');
        // 提取所有的参数
        // $params=$request->all();
        // 提取部分参数
        // $params=$request->only(['name','height']);
        $params=$request->except(['name']);







        dd($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/req');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $params=$request->all();
        // $params=$request->except(['_token']);
        // echo "这是执行添加方法";
        $name=$request->input("name");
        $request->flash();
        if ($name==null) {
            return back();
        }

        // var_dump($params);
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
