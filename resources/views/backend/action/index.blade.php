<meta name="_token" content="{!! csrf_token() !!}"/>
@inject('menuPresenter','App\Presenters\Backend\ActionPresenter')

<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="{{ url('backend/action/search')}}" method="POST">
        @include('backend.common.formHeader')
        <div class="bjui-searchBar">
            <label>操作名称：</label>
            <input type="text" id="actionname" value="{{isset($search['name'])?$search['name']:''}}" name="search[name]"   class="form-control" size="10">&nbsp;
            <label>操作描述：</label>
            <input type="text" id="actiondesc" value="{{isset($search['description'])?$search['description']:''}}" name="search[description]"     class="form-control" size="10">&nbsp;
            <label>操作分组：</label>
            <input type="text" id="actiongroup" value="{{isset($search['group'])?$search['group']:''}}" name="search[group]"     class="form-control" size="10">&nbsp;

            <label>操作标识：</label>
            <input type="text" id="actionaction" value="{{isset($search['action'])?$search['action']:''}}" name="search[action]"    class="form-control" size="10">&nbsp;

            <button type="submit" class="btn-default" onclick="checkSearch();" data-icon="search">模糊查询</button>
            &nbsp;
            <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('actionslist', true);"
               data-icon="undo">清空查询</a>

            <button type="button" class="btn-blue btn"   data-icon="fa-plus" data-width='610' data-toggle="dialog" data-id="addaction"  data-fresh="true" data-url="{{route('backend.action.create')}}" data-title="添加新操作">添加新操作</button>

            <div class="pull-right">
                <div class="btn-group">
                    <button type="button" class="btn-default dropdown-toggle" data-toggle="dropdown" data-icon="glyphicon-star">
                        批量操作<span class="caret"></span></button>
                    <ul class="dropdown-menu right" role="menu">
                        <li><a href="{{URL::to('backend/action/selectdelete')}}" data-toggle="doajaxchecked" data-type='post'data-confirm-msg="确定要删除选中项吗？"
                               data-idname="ids" data-group="ids">删除选中</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table   data-toggle="tablefixed"   data-width="100%" data-nowrap="true" style='font-size:30px'>
        <thead>
        <tr>
            <th width="26"><input type="checkbox" class="checkboxCtrl" data-group="ids" data-toggle="icheck"></th>
            <th data-order-field="id">ID</th>
            <th data-order-field="name">操作名称</th>
            <th data-order-field="description">操作描述</th>
            <th data-order-field="group">操作分组</th>
            <th data-order-field="action">操作标识</th>
            <th data-order-field="state">是否显示</th>
            <th data-order-field="sort">排序</th>
            <th >操作</th>
        </tr>
        </thead>

        <tbody>

        @foreach($data['info'] as $item)
            <tr data-id="{{$item->id}}" >
                <td><input type="checkbox" name="ids" data-toggle="icheck" value="{{$item->id}}"></td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->group}}</td>
                <td>{{$item->action}}</td>
                <td>{{$menuPresenter->showDisplayFormat($item->state)}}</td>
                <td>{{$item->sort}}</td>
                <td>

                        <a href="{{route('backend.action.edit',['id'=>$item->id])}}" class="btn btn-green"
                           data-toggle="dialog" data-id="editadmin"  data-width="610"    data-title="编辑- {{$item->description}} -操作">编辑</a>
                        <a href="{{URL::to('backend/action/'.'d')}}" class="btn btn-red" data-toggle="doajax"
                           data-confirm-msg="确定要删除{{$item->email}}操作？"  data-type="delete">删除</a>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

@include('backend.common.formFooter')

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    function checkSearch() {
        var actionname = $('#actionname').val();
        var actionaction = $('#actionaction').val();
        var actiondesc = $('#actiondesc').val();
        var actiongroup = $('#actiongroup').val();
        if (actionname==''&&actionaction==''&&actiongroup==''&&actiondesc=='') {
            $(this).alertmsg('error', '搜索字段不能为空')
            return false;
        }
        return true;
    }
</script>