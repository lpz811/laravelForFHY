
<div class="bjui-pageContent">
    <form  action="{{route('backend.role.store')}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >

            <tr>
                <th>角色标识:</th>
                <td><input type="text" class="input-nm" data-rule="标识:required"   name="name" id="name" value=""data-tip="不能与已有的标识重复" placeholder="角色标识" size="20"></td>
            </tr>
            <tr>
                <th>角色名称:</th>
                <td><input type="text" class="input-nm" data-rule="名称:required"   name="display_name" id="name" value="" placeholder="角色名称" size="20"></td>
            </tr>
            <tr>
                <th>角色描述:</th>
                <td><input type="text" class="input-nm" data-rule="描述:required"   name="description" id="name" value="" placeholder="角色描述" size="30"></td>
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
