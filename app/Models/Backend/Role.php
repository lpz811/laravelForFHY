<?php

namespace App\Models\Backend;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
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
    protected $table = "roles";
}