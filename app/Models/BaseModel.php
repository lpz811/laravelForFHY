<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    // 多where
    public function scopeMultiwhere($query, $arr,$like='=')
    {
        if (!is_array($arr)) {
            return $query;
        }
        foreach ($arr as $key => $value) {
            if(!empty($value)){
                if($like!='='){
                    $value='%'.$value.'%';
                }
                $query = $query->where($key,$like,$value);
            }
        }
        return $query;
    }
}
