<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class PermissionCreateForm extends Request
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

    public function rules()
    {
        return [
            'name'         => 'required',
            'display_name' => 'required',
            'type'         => 'required',
            'description'  => 'required',
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
            'name.required'         => '权限标识不能为空',
            'display_name.required' => '权限名称不能为空',
            'type.required'         => '权限类型不能为空',
            'description.required'  => '权限描述不能为空',
        ];
    }
}
