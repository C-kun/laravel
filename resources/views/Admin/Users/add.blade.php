@extends('Admin.AdminPublic.public')
@section('title','用户添加')
@section('main')
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>会员添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/user" method="post">
                              
                              @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                   <div class="mws-form-message error">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                      </div>
                                  </div>
                              @endif
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">会员名</label>
                    				<div class="mws-form-item">
                    					<input type="text" name="uname" class="small" value="{{old('uname')}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">会员密码</label>
                    				<div class="mws-form-item">
                    					<input type="password" name="pass" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">重复密码</label>
                    				<div class="mws-form-item">
                    					<input type="password" name="repass" class="small">
                    				</div>
                    			</div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">邮箱</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="email" class="small" value="{{old('email')}}">
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">电话</label>
                                        <div class="mws-form-item">
                                             <input type="text" name="phone" class="small" value="{{old('phone')}}">
                                        </div>
                                   </div>
                    			
                    			
                    			
                    			</div>
                    			
                    		</div>
                    		<div class="mws-button-row">
                                   {{csrf_field()}}
                    			<input type="submit" value="Submit" class="btn btn-danger">
                    			<input type="reset" value="Reset" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection
