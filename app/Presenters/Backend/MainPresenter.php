<?php

namespace App\Presenters\Backend;


use App\Facades\Backend\AdminRepository;
use Cache, Route, Auth;

/**
 * Menu View Presenters
 */
class MainPresenter extends CommonPresenter
{
    /**
     * 左侧栏视图缓存键
     */
    const SIDEBAR_MENUS_CACHE = 'sidebar_menus_view_cache';

    /**
     * 面包屑导航缓存键
     */
    const BREADCRUMBS_MENUS_CACHE = 'breadcrumbs_menus_view_cache:';

    /**
     * 渲染左侧栏视图
     *
     * @param  array $route
     * @param  array $menus
     *
     * @return mixed
     */
    public function renderSidebar(array $menus)
    {
        $user = Auth::user();
        if( ! $user){
            return redirect()->to('/auth/logout');
        }

        $routes = AdminRepository::getAdminMenusPermissionsByAdminModel($user);
        if( ! $routes){
            return "";
        }
        if($user['is_super_admin'] ==0){
            foreach ($menus as $key => $menu) {
                if( ! in_array($menu['route'], $routes)){
                    unset($menus[ $key ]);
                }
            }
        }
        $sidebar= $this->makeSidebar(list_to_tree($menus));

        return $sidebar;
    }


    /**
     * 生成左侧栏
     *
     * @param array $menus
     * @param array $active
     *
     * @return string
     */
    protected   function makeSidebar(array $menus)
    {


        $sidebar = '<ul id="bjui-hnav-navbar">';
        foreach ($menus as $key=>$item) {
            $active=$key==0?'class="active"':'';
                $sidebar.='<li '.$active.'><a href="javascript:;" data-toggle="slidebar"><i class="'.$item['icon'].'"></i>'.$item['description'].'</a><div class="items hide" data-noinit="true">';
                $sidebar.='<ul id="bjui-doc-tree-base" class="ztree ztree_main" data-toggle="ztree"
                            data-on-click="MainMenuClick" data-expand-all="true" data-faicon="'.$item['icon'].'"
                            data-tit="'.$item['description'].'">';
                foreach ($item['child'] as $ite){
                        $sidebar.='<li data-id="'.$ite['data_id'].'" data-pid="'.$ite['data_pid'].'" data-faicon="'.$ite['icon'].'" data-faicon-close="'.$ite['icon_close'].'">'.$ite['description'].'</li>';
                    foreach ($ite['child'] as $it){
                        $sidebar.='<li data-id="'.$it['data_id'].'" data-pid="'.$it['data_pid'].'" data-faicon="'.$it['icon'].'" data-url="'.route($it['route']).'" data-fresh="'.$it['data_fresh'].'" data-tabid="'.$it['tab_id'].'"data-faicon-close="'.$it['icon_close'].'">
                               '.$it['description'].'</li>';
                    }
                }

                $sidebar.='</ul></div></li>';
        }
        $sidebar .= '</ul>';
        return $sidebar;
    }


}
