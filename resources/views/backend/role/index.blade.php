<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="{{ url('backend/role/search')}}" method="POST">
        @include('backend.common.formHeader')
        <div class="bjui-searchBar">
            <label>角色标识：</label>
            <input type="text" id="customNo" value="{{isset($search['name'])?$search['name']:''}}" name="search[name]"   class="form-control" size="10">&nbsp;
            <label>角色名称：</label>
            <input type="text" id="customNo" value="{{isset($search['display_name'])?$search['display_name']:''}}" name="search[display_name]"   class="form-control" size="15">
            <label>角色描述：</label>
            <input type="text" id="customNo" value="{{isset($search['description'])?$search['description']:''}}" name="search[description]"    class="form-control" size="15">&nbsp;
            <button type="button" class="showMoreSearch" data-toggle="moresearch" data-name="custom2"></button>
            <button type="submit" class="btn-default" data-icon="search">模糊查询</button>
            &nbsp;
            <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('roleslist', true);"
               data-icon="undo">清空查询</a>

            <button type="button" class="btn-blue btn" data-toggle="dialog" data-id="addrole"  data-fresh="true" data-url="{{route('backend.role.create')}}" data-title="添加新角色">添加新角色</button>

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
            <th data-order-field="id">角色ID</th>
            <th data-order-field="name">角色标识</th>
            <th data-order-field="display_name">角色名称</th>
            <th data-order-field="description">角色描述</th>
            <th width="100">操作</th>
        </tr>
        </thead>

        <tbody>
        @foreach($data['info'] as $item)
            <tr data-id="{{$item->id}}">
                <td><input type="checkbox" name="ids" data-toggle="icheck" value="{{$item->id}}"></td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->display_name}}</td>
                <td>{{$item->description}}</td>
                <td>
                        <a href="{{route('backend.role.edit',['id'=>$item->id])}}" class="btn btn-green"
                           data-toggle="dialog" data-id="editrole" data-fresh="true"  data-title="编辑-{{$item->display_name}}角色">编辑</a>

                        <a href="{{URL::to('backend/role/'.$item->id)}}" class="btn btn-red" data-toggle="doajax"
                           data-confirm-msg="确定要删除该行信息吗？" data-type="delete">删除</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('backend.common.formFooter')