<?php

namespace App\Traits\Model\Backend;

trait ActionBelongsToManyTrait
{
    public function actions()
    {

        return $this->belongsToMany('App\Models\Backend\Action');
    }
}