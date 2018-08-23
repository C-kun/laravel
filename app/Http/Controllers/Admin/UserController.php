<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\UserInsert;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo "这是users列表";
        $k=$request->input('keywords');
        $users=DB::table("users")->where("uname","like","%".$k."%")->paginate(3);
        return view("Admin.Users.index",['users'=>$users,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "这是用户添加列表";
        return view("Admin.Users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserInsert $request)
    {
        // dd($request->all());
        $data=$request->except(['repass','_token']);
        $data['pass']=Hash::make($data['pass']);
        // dd($data);
        if (DB::table('users')->insert($data)) {
            return redirect('/user')->with('success','数据添加成功');
        }else{
            return redirect('/user/create')->with('error','数据添加失败');;
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=DB::table("users")->where("id","=",$id)->first();
        return view("Admin.Users.edit",["users"=>$users]);
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
        echo $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        if (DB::table("users")->where("id","=",$id)->delete()) {
            return redirect("/user")->with('success','数据删除成功');
        }
    }

    public function del(Request $request){
        $id=$request->input('id');
        // echo $id;
        if (DB::table("users")->where("id","=",$id)->delete()) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
