
<div class="bjui-pageContent">
    <form  action="{{route('backend.role.update',['id'=>$data['id']])}}" data-toggle="validate" method="put">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >
            <tr>
                <th>角色标识:</th>
                <td><input type="text" class="input-nm" data-rule="标识:required"  readonly  name="name" id="name" value="{{$data['name']}}" placeholder="角色标识"  size="20"> </td>
            </tr>
            <tr>
                <th>角色名称:</th>
                <td><input type="text" class="input-nm" data-rule="名称:required"   name="display_name" id="display_name" value="{{$data['display_name']}}" placeholder="角色名称" size="20"></td>
            </tr>
            <tr>
                <th>角色描述:</th>
                <td><input type="text" class="input-nm" data-rule="描述:required"   name="description" id="description" value="{{$data['description']}}" placeholder="角色描述" size="30"></td>
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
 