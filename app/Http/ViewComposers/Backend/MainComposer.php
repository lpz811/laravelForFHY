<?php

namespace App\Http\ViewComposers\Backend;

use App\Facades\Backend\MenuRepository;
use Illuminate\Contracts\View\View;

class MainComposer
{
    /**
     * 将数据绑定到视图
     *
     * @param  View $view
     *
     * @return mixed
     */
    public function compose(View $view)
    {
        $menus = MenuRepository::getAllDisplayMenus();
        $view->with(compact('menus'));
    }


}
