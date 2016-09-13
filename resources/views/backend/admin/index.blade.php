<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="table-fixed.html" method="post">
        <input type="hidden" name="pageSize" value="${model.pageSize}">
        <input type="hidden" name="pageCurrent" value="${model.pageCurrent}">
        <input type="hidden" name="orderField" value="${param.orderField}">
        <input type="hidden" name="orderDirection" value="${param.orderDirection}">
        <div class="bjui-searchBar">
            <label>护照号：</label><input type="text" id="customNo" value="" name="code" class="form-control" size="10">&nbsp;
            <label>客户姓名：</label><input type="text" value="" name="name" class="form-control" size="8">&nbsp;
            <label>所属业务:</label>
            <select name="type" data-toggle="selectpicker">
                <option value="">全部</option>
                <option value="1">联络</option>
                <option value="2">住宿</option>
                <option value="3">餐饮</option>
                <option value="4">交通</option>
            </select>&nbsp;
            <input type="checkbox" id="j_table_chk" value="true" data-toggle="icheck" data-label="我的客户">&nbsp;
            <button type="button" class="showMoreSearch" data-toggle="moresearch" data-name="custom2"><i
                        class="fa fa-angle-double-down"></i></button>
            <button type="submit" class="btn-default" data-icon="search">查询</button>
            &nbsp;
            <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);"
               data-icon="undo">清空查询</a>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn-default dropdown-toggle" data-toggle="dropdown" data-icon="copy">
                        复选框-批量操作<span class="caret"></span></button>
                    <ul class="dropdown-menu right" role="menu">
                        <li><a href="book1.xlsx" data-toggle="doexport" data-confirm-msg="确定要导出信息吗？">导出<span
                                        style="color: green;">全部</span></a></li>
                        <li><a href="book1.xlsx" data-toggle="doexportchecked" data-confirm-msg="确定要导出选中项吗？"
                               data-idname="expids" data-group="ids">导出<span style="color: red;">选中</span></a></li>
                        <li class="divider"></li>
                        <li><a href="ajaxDone2.html" data-toggle="doajaxchecked" data-confirm-msg="确定要删除选中项吗？"
                               data-idname="delids" data-group="ids">删除选中</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bjui-moreSearch">
            <label>职业：</label><input type="text" value="" name="profession" size="15"/>
            <label>&nbsp;性别:</label>
            <select name="sex" data-toggle="selectpicker">
                <option value="">全部</option>
                <option value="true">男</option>
                <option value="false">女</option>
            </select>
            <label>&nbsp;手机:</label>
            <input type="text" value="" name="mobile" size="10">
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table data-toggle="tablefixed" data-width="100%" data-nowrap="true" style='font-size:30px'>
        <thead>
        <tr>
            <th width="26"><input type="checkbox" class="checkboxCtrl" data-group="ids" data-toggle="icheck"></th>
            <th data-order-field="id">ID</th>
            <th data-order-field="name">姓名</th>
            <th data-order-field="email">邮箱</th>
            <th width="100">操作</th>
        </tr>
        </thead>

        <tbody>
                @foreach($data as $item)

                    <tr data-id="{{$item->id}}">
                        <td><input type="checkbox" name="ids" data-toggle="icheck" value="{{$item->id}}"></td>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            @if(Auth::user()->id == $item->id || Auth::user()->is_super_admin==1)
                                <a href="{{route('backend.admin.edit',['id'=>$item->id])}}" class="btn btn-green"
                                   data-toggle="navtab" data-id="form" data-reload-warn="本页已有打开的内容，确定将刷新本页内容，是否继续？"
                                   data-title="编辑-孙悟空">编辑</a>
                                <a href="ajaxDone2.html" class="btn btn-red" data-toggle="doajax"
                                   data-confirm-msg="确定要删除该行信息吗？">删除</a>
                            @endif



                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
<div class="bjui-pageFooter">
    <div class="pages">
       {{-- <span>每页&nbsp;</span>
        <div class="selectPagesize">
            <select data-toggle="selectpicker" data-toggle-change="changepagesize">
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="120">120</option>
                <option value="150">150</option>
            </select>
        </div>
        <span>&nbsp;条，共 600 条</span>--}}
        {!! $data->render() !!}
    </div>
    <div class="pagination-box" data-toggle="pagination" data-total="600" data-page-size="30" data-page-current="1">
    </div>
</div>