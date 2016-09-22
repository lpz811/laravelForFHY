<?php

namespace App\Models\Backend;

use App\Traits\Model\Backend\ActionBelongsToManyTrait;
use App\Traits\Model\Backend\MenuBelongsToManyTrait;
use App\Traits\Model\Backend\ModelsExtendsTrait;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    use ModelsExtendsTrait,MenuBelongsToManyTrait, ActionBelongsToManyTrait;

    /**
     * [$guarded description]
     *
     * @var string
     */
    protected static $order = 'type';
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
    protected $table = "permissions";
}
