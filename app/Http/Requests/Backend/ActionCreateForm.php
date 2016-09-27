<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class ActionCreateForm extends Request
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
            'group'       => 'required',
            'name'        => 'required',
            'action'      => 'required',
            'description' => 'required',
            'sort'        => 'required|numeric',
            'state'       => 'required|boolean',
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
            'group.required'       => '操作名称不能为空',
            'name.required'        => '操作分组不能为空',
            'action.required'      => '操作描述不能为空',
            'description.required' => '操作标识不能为空',
            'sort.required'        => '排序不能为空',
            'sort.numeric'          => '排序字段必须是数值',
            'state.require'        => '操作状态不能为空',
            'state.boolean'        => '操作状态为BOOL值',
        ];
    }
}
