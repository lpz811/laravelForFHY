
<div class="bjui-pageContent">
    <form  action="{{route('backend.menu.update',['id'=>$data->id])}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="{{$data->id}}">
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >
            <tr>
                <th><label class="x85">父级菜单：</label></th>
                <td>
                    <select name="parent_id"   data-width="200" data-size="5"   data-max-options="1" data-toggle="selectpicker">

                        <option   selected="selected"   value="0">顶级分类</option>
                        @foreach($tree as $item)
                            <option value="{{$item['id']}}" @if($data['parent_id'] == $item['id']) selected="selected" @endif>
                                {{ $item['html'] }}{{ $item['description'] }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <th>菜单名称:</th>
                <td><input type="text" class="input-nm"  data-rule="名称:required"    name="name" id="name" value="{{$data->name}}" placeholder="菜单名称" size="20"></td>
            </tr>
            <tr>
                <th>菜单描述:</th>
                <td><input type="text" class="input-nm"  data-rule="描述:required"   name="description" id="description" value="{{$data->description}}" placeholder="菜单描述" size="20"></td>
            </tr>
            <tr>
                <th>菜单路由:</th>
                <td><input type="text" class="input-nm"   data-rule="路由:required"  name="route" id="route" value="{{$data->route}}" placeholder="菜单路由" size="20"></td>
            </tr>

            <tr>
                <th>TAB_ID:</th>
                <td><input type="text" class="input-nm"   data-rule="required"  name="tab_id" id="tab_id" value="{{$data->tab_id}}" placeholder="TAB_ID" size="20"></td>
            </tr>
            <tr>
                <th>菜单打开时图标:</th>
                <td><input type="text" class="input-nm"   data-rule="打开时图标:required"  name="icon" id="icon" value="{{$data->icon}}" placeholder="菜单打开时图标" size="20"></td>
            </tr>

            <tr>
                <th>页面打开是否刷新:</th>
                <td>
                    <input type="radio" name="data_fresh" @if($data->data_fresh==1)checked @endif id="data_fresh1" value="1" data-toggle="icheck" data-label="刷新">
                    <input type="radio" name="data_fresh" @if($data->data_fresh==0)checked @endif id="data_fresh2" value="0" data-toggle="icheck" data-label="不刷新">
                </td>
            </tr>
            <tr>
                <th>菜单排序:</th>
                <td><input type="text" class="input-nm"   data-rule="required"  name="sort" id="sort" value="{{$data->sort}}" placeholder="菜单排序" size="20"></td>
            </tr>
            <tr>
                <th>是否隐藏:</th>
                <td>
                    <input type="radio" name="hide" id="hide2" value="0" @if($data->hide==0) checked @endif data-toggle="icheck" data-label="显示">
                    <input type="radio" name="hide" id="hide1" value="1" @if($data->hide==1) checked @endif data-toggle="icheck" data-label="隐藏">
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close" data-icon="">取消</button></li>
        <li><button type="submit" class="btn-default">保存</button></li>
    </ul>
</div>




