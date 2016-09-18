<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    /**
     * 限制读取字段
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 设置模型表名
     *
     * @var string
     */
    protected $table = "permission_role";
}
