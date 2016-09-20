<?php

namespace App\Traits\Model\Backend;

trait MenuBelongsToManyTrait
{
    public function menus()
    {
        return $this->belongsToMany('App\Models\Backend\Menu');
    }
}