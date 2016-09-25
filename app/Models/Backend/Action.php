<?php

namespace App\Models\Backend;

use App\Traits\Model\Backend\ModelsExtendsTrait;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use ModelsExtendsTrait;
    /**
     * [$guarded description]
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * [$guarded description]
     *
     * @var string
     */
    protected $table = "actions";
}
