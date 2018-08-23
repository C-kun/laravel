<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //给表单校验授权
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //会员名做规则设置
            'uname'=>'required|regex:/\w{4,8}/|unique:users',
            'pass'=>'required|regex:/\w{8,16}/',
            'repass'=>'required|regex:/\w{8,16}/|same:pass',
            'email'=>'required',
            'phone'=>'required|regex:/\d{11}/',

        ];
    }

    public function messages(){
        return [

            'uname.required'=>'用户名信息不能为空',
            'uname.regex'=>'用户名必须是4-8位的任意数字字母下划线',
            'uname.unique'=>'用户名不能重复',
            'pass.required'=>'密码不能为空',
            'pass.regex'=>'用户名密码必须是8-16位的任意数字字母下划线',
            'repass.required'=>'重复密码不能为空',
            'repass.regex'=>'重复用户名密码必须是8-16位的任意数字字母下划线',
            'repass.same'=>'两次密码不一致',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不符合要求',
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号必须是16位'

        ];
    }
}
