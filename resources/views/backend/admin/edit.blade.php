
<div class="bjui-pageContent">
    <form  action="{{route('backend.admin.update',['id'=>$admin->id])}}" data-toggle="validate" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="{{$admin->id}}">
        <table class="table table-bordered table-hover  table-striped table-top table-condensed"   >

            <tr>
                <th><label class="x85">用户角色：</label></th>
                <td>
                    <select name="role_id[]" data-rule="required" data-width="200" data-size="5"  multiple data-max-options="2" data-toggle="selectpicker">

                        @foreach($roles as $role)
                            <option value="{{$role->id}}" @if(in_array($role->display_name,$displayNames)) selected @endif>{{$role->display_name}}</option>
                        @endforeach
                    </select>

                </td>
            </tr>
            <tr>
                <th>用户姓名:</th>
                <td><input type="text" class="input-nm"  data-rule="用户名:required"   name="name"   id="name" value="{{$admin['name']}}" placeholder="用户姓名" size="20"></td>
            </tr>
            <tr>
                <th>用户邮箱:</th>
                <td><input type="text" class="input-nm" readonly data-rule="邮箱:required;email"    name="email" id="name" value="{{$admin['email']}}" placeholder="用户邮箱" size="20"></td>
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