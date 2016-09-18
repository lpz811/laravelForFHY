<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="{{ url('backend/admin/search')}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="pageSize" value="${model.pageSize}">
        <input type="hidden" name="pageCurrent" value="${model.pageCurrent}">
        <input type="hidden" name="orderField" value="${param.orderField}">
        <input type="hidden" name="orderDirection" value="${param.orderDirection}">
        <div class="bjui-searchBar">
            <label>姓名：</label>
            <input type="text" id="customNo" value="{{isset($search['name'])?$search['name']:''}}" name="search[name]"   class="form-control" size="10">&nbsp;
            <label>邮箱：</label>
            <input type="text" id="customNo" value="{{isset($search['email'])?$search['email']:''}}" name="search[email]"    class="form-control" size="10">&nbsp;
            <button type="button" class="showMoreSearch" data-toggle="moresearch" data-name="custom2"><i
                        class="fa fa-angle-double-down"></i></button>
            <button type="submit" class="btn-default" data-icon="search">模糊查询</button>
            &nbsp;
            <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('adminslist', true);"
               data-icon="undo">清空查询</a>
            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn-default dropdown-toggle" data-toggle="dropdown" data-icon="copy">
                        复选框-批量操作<span class="caret"></span></button>
                    <ul class="dropdown-menu right" role="menu">

                        <li><a href="ajaxDone2.html" data-toggle="doajaxchecked" data-confirm-msg="确定要删除选中项吗？"
                               data-idname="delids" data-group="ids">删除选中</a></li>
                    </ul>
                </div>
            </div>
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
                @foreach($data['info'] as $item)

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
         <span>每页&nbsp;</span>
        <div class="selectPagesize">
            <select data-toggle="selectpicker" data-toggle-change="changepagesize">
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="120">120</option>
                <option value="150">150</option>
            </select>
        </div>
        <span>&nbsp;条，共  {{ $data['total'] }}  条</span>
    </div>
    <div class="pagination-box" data-toggle="pagination" data-total="{{ $data['total']}}" data-page-size="30" data-page-current="{{ $data['pageCurrent'] }}">
    </div>
</div>