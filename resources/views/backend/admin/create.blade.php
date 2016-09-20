
<div class="bjui-pageContent">
    <form  action="{{route('backend.admin.store')}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >

            <tr>
                <th><label class="x85">用户角色：</label></th>
                <td>
                    <select name="role_id[]" data-rule="required" data-width="200" data-size="5"  multiple data-max-options="2" data-toggle="selectpicker">
                        <option value="" >请选择角色</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->display_name}}</option>
                        @endforeach
                    </select>

                </td>
            </tr>
            <tr>
                <th>用户姓名:</th>
                <td><input type="text" class="input-nm"     name="name" data-tip="用户名不能重复" id="name" value="" placeholder="用户姓名" size="20"></td>
            </tr>
            <tr>
                <th>用户邮箱:</th>
                <td><input type="text" class="input-nm"     name="email" id="name" value="" placeholder="用户邮箱" size="20"></td>
            </tr>
            <tr>
                <th>用户密码:</th>
                <td><input type="password" class="input-nm"     name="password" id="name" value="" placeholder="用户密码" size="20"></td>
            </tr>
            <tr>
                <th>确认密码:</th>
                <td><input type="password" class="input-nm"     name="password_confirmation" id="name" value="" placeholder="确认密码" size="20"></td>
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
