<?php

namespace App\Traits\Model;

trait ActionBelongsToManyTrait
{
    public function actions()
    {

        return $this->belongsToMany('App\Models\Backend\Action');
    }
}