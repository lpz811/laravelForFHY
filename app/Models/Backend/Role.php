<?php

namespace App\Models\Backend;

use App\Traits\Model\Backend\ModelsExtendsTrait;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    use ModelsExtendsTrait;
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