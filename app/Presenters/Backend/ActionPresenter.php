<?php

namespace App\Presenters\Backend;

use App\Traits\Presenter\BasePresenterTrait;
use App\Facades\Backend\MenuRepository;

/**
 * Menu View Presenters
 */
class ActionPresenter extends CommonPresenter
{
    use  BasePresenterTrait;

    /**
     * 格式化显示隐藏状态
     *
     * @param  int $status
     *
     * @return string
     */
    public function showDisplayFormat($status)
    {
        if($status){
            return "显示";
        } else {
            return "隐藏";
        }
    }
}
