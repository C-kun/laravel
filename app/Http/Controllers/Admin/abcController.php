<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
    	echo "这是usercontroller下的index方法";
    }
    public function add(){
    	echo "这是usercontroller下的add方法";

    }
    public function delete($id){
    	echo "你要删除的id是".$id;
    }
    public function info(){
    	echo "这是会员详情";
    }
    public function index1(){
    	echo "index1";
    }
    public function index2(){
    	echo "index2";
    }
}
