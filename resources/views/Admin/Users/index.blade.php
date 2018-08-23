@extends('Admin.AdminPublic.public')
@section('title','用户列表')
@section('main')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>会员列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
                <label>Show
                <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                    <option value="10" selected="selected">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                 entries
                </label>
            </div>
            <form action="/user" method="get">
                <div class="dataTables_filter" id="DataTables_Table_1_filter" >
                <label>搜索: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}"></label><input type="submit" value="搜索">
            </div>
            </form>
            
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 145px;">
                    ID
                </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 195px;">
                    会员名
                </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 178px;">
                    邮箱
                </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 127px;">
                    手机号
                </th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 93px;">
                    操作
                </th>
            </tr>
            </thead>
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($users as $row)
            <tr class="odd">
                <td class=" sorting_1">
                    {{$row->id}}
                </td>
                <td class=" ">
                    {{$row->uname}}
                </td>
                <td class=" ">
                    {{$row->email}}
                </td>
                <td class=" ">
                    {{$row->phone}}
                </td>
                <td class=" ">
                    <form action="/user/{{$row->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <button class="btn btn-danger">删除</button>
                    </form>
                    <a href="javascript:void(0)" class="btn btn-danger del">Ajax删除</a><a href="/user/{$row->id}/edit" class="btn btn-info">修改</a>
                </td>
            </tr>
                            @endforeach
            </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="pages">
                {{$users->appends($request)->render()}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // alert($);
    $('.del').click(function(){
        id=$(this).parents('tr').find('td:first').html();
        s=$(this).parents('tr');
        // alert($id);
        $.get('/userdel',{id:id},function(data){
            // alert(data);
            if (data==1) {
                s.remove();
                alert("删除成功");

            }else{
                alert("删除失败");
            }
        });

    });
</script>
@endsection
@section('title','用户首页')