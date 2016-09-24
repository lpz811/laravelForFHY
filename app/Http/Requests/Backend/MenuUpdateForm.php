<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class MenuUpdateForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'parent_id'   => 'required',
            'name'        => 'required',
            'description' => 'required',
            'route'       => 'required',
            'data_id'     => 'required',
            'tab_id'      => 'required',
            'icon'        => 'required',
            'icon_close'  => 'required',
            'data_fresh'  => 'required',
            'sort'        => 'required',
            'hide'        => 'required',

        ];
    }

    /**
     * Get the validation message that apply to the request
     *
     * @return array
     */
    public function messages()
    {
        return [
            'parent_id.required' => '父级菜单ID不能为空',
            'name.required' => '菜单名称不能为空',
            'description.required' => '菜单描述不能为空',
            'route.required' => '菜单路由不能为空',
            'data_id.required' => '菜单data_id不能为空',
            'tab_id.required' => '菜单tab_id不能为空',
            'icon.required' => '菜单打开时图标不能为空',
            'icon_close.required' => '菜单关闭时图标不能为空',
            'data_fresh.required' => '页面打开时是否刷新不能为空',
            'sort.required' => '菜单分类不能为空',
            'hide.required' => '菜单是否显示不能为空',
        ];
    }
}
