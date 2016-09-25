
<div class="bjui-pageContent">
    <form  action="{{route('backend.permission.update',['id'=>$data->id])}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >
            <tr>
                <th>权限标识:</th>
                <td><input type="text" class="input-nm"  data-rule="标识:required"   name="name"  id="name" value="{{$data->name}}" placeholder="权限标识" size="30"></td>
            </tr>
            <tr>
                <th><label class="x85">权限分类：</label></th>
                <td>
                    <select name="type" id='type' data-rule="required" data-width="200" data-size="5"   data-max-options="1" data-toggle="selectpicker">

                        @foreach(config('ui.permission-type') as $key => $value)
                            <option value="{{$key}}"
                                    @if($key == $data->type) selected @endif
                            >{{$value}}</option>
                        @endforeach
                    </select>

                </td>
            </tr>

            <tr>
                <th>权限名称:</th>
                <td><input type="text" class="input-nm"  data-rule="名称:required"    name="display_name" id="display_name" value="{{$data->display_name}}" placeholder="权限名称" size="30"></td>
            </tr>
            <tr>
                <th>权限描述:</th>
                <td><input type="text" class="input-nm"  data-rule="描述:required"   name="description" id="description" value="{{$data->description}}" placeholder="权限描述" size="30"></td>
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



