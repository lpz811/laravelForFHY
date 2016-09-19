
<div class="bjui-pageContent">
    <form  action="{{route('backend.admin.store')}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >
            <tr>
                <th>用户姓名:</th>
                <td><input type="text" class="input-nm" data-rule="姓名:required"   name="data[name]" data-tip="不能与已有的标识重复" id="name" value="" placeholder="用户姓名" size="20"></td>
            </tr>
            <tr>
                <th>用户邮箱:</th>
                <td><input type="text" class="input-nm" data-rule="邮箱:required;email"   name="data[email]" id="name" value="" placeholder="用户邮箱" size="20"></td>
            </tr>
            <tr>
                <th>用户密码:</th>
                <td><input type="text" class="input-nm" data-rule="密码:required"   name="data[password]" id="name" value="" placeholder="用户密码" size="20"></td>
            </tr>
            <tr>
                <th>确认密码:</th>
                <td><input type="text" class="input-nm" data-rule="确认密码:required;match(data[password])"   name="data[repassword]" id="name" value="" placeholder="确认密码" size="20"></td>
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
