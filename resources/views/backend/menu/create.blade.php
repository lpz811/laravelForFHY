
<div class="bjui-pageContent">
    <form  action="{{route('backend.menu.store')}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >
            <tr>
                <th><label class="x85">父级菜单：</label></th>
                <td>
                    <select name="parent_id"   data-width="200" data-size="5"  multiple data-max-options="1" data-toggle="selectpicker">
                        <option selected="selected" value="0">顶级分类</option>
                        @foreach($tree as $item)
                            <option   value="{{$item['id']}}">
                                {{ $item['html'] }}{{ trans($item['name']) }}
                            </option>
                        @endforeach
                    </select>

                </td>
            </tr>
            <tr>
                <th>PARENT_ID:</th>
                <td><input type="text" class="input-nm"  data-rule="父级ID:required;digits"   name="parent_id"  id="parent_id" value="" placeholder="父级ID" size="20"></td>
            </tr>
            <tr>
                <th>菜单名称:</th>
                <td><input type="text" class="input-nm"  data-rule="名称:required"    name="name" id="name" value="" placeholder="菜单名称" size="20"></td>
            </tr>
            <tr>
                <th>菜单描述:</th>
                <td><input type="text" class="input-nm"  data-rule="描述:required"   name="description" id="description" value="" placeholder="菜单描述" size="20"></td>
            </tr>
            <tr>
                <th>菜单路由:</th>
                <td><input type="text" class="input-nm"   data-rule="路由:required"  name="route" id="route" value="" placeholder="菜单路由" size="20"></td>
            </tr>

            <tr>
                <th>DADA_ID:</th>
                <td><input type="text" class="input-nm"   data-rule="required;digits"  name="data_id" id="data_id" value="" placeholder="DADA_ID" size="20"></td>
            </tr>
            <tr>
                <th>TAB_ID:</th>
                <td><input type="text" class="input-nm"   data-rule="required"  name="tab_id" id="tab_id" value="" placeholder="TAB_ID" size="20"></td>
            </tr>
            <tr>
                <th>菜单打开时图标:</th>
                <td><input type="text" class="input-nm"   data-rule="打开时图标:required"  name="icon" id="icon" value="" placeholder="菜单打开时图标" size="20"></td>
            </tr>
            <tr>
                <th>菜单关闭时图标:</th>
                <td><input type="text" class="input-nm"   data-rule="关闭时图标:required"  name="icon_close" id="icon_close" value="" placeholder="菜单关闭时图标" size="20"></td>
            </tr>
            <tr>
                <th>页面打开是否刷新:</th>
                <td>
                    <input type="radio" name="data_fresh" id="data_fresh" value="1" data-toggle="icheck" data-label="是">
                    <input type="radio" name="data_fresh" id="data_fresh" value="0" data-toggle="icheck" data-label="否">
                </td>
            </tr>
            <tr>
                <th>菜单排序:</th>
                <td><input type="text" class="input-nm"   data-rule="required"  name="sort" id="sort" value="" placeholder="菜单排序" size="20"></td>
            </tr>
            <tr>
                <th>是否隐藏:</th>
                <td>
                    <input type="radio" name="hide" id="hide" value="1" data-toggle="icheck" data-label="是">
                    <input type="radio" name="hide" id="hide" value="0" data-toggle="icheck" data-label="否">
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



