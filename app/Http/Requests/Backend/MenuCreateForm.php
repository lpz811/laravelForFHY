<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class MenuCreateForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'parent_id'   => 'required',
            'name'        => 'required',
            'description' => 'required',
            'route'       => 'required|unique:menus,route,' . $this->get('id'),
            'tab_id'      => 'required|unique:menus,tab_id,' . $this->get('id'),
            'icon'        => 'required',
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
            'parent_id.required'   => '父级菜单ID不能为空',
            'name.required'        => '菜单名称不能为空',
            'description.required' => '菜单描述不能为空',
            'route.required'       => '菜单路由不能为空',
            'route.unique'         => '菜单路由必须唯一' ,
            'tab_id.required'      => '菜单tab_id不能为空',
            'tab_id.unique'        => '菜单tab_id必须唯一',
            'icon.required'        => '菜单打开时图标不能为空',
            'data_fresh.required'  => '页面打开时是否刷新不能为空',
            'sort.required'        => '菜单分类不能为空',
            'hide.required'        => '菜单是否显示不能为空',
        ];
    }
}
