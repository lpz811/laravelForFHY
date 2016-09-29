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

        $routes = AdminRepository::getAdminMenusPermissionsByUserModel($user);
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
        $trees = list_to_tree($menus);
        $sidebar = '<ul id="bjui-hnav-navbar">';
        $sidebar .= $this->makeSidebar($trees);
        $sidebar .= '</ul>';
dd($sidebar);
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
    protected static function makeSidebar(array $menus)
    {

        $sidebar = "";
        foreach ($menus as $item) {
            $sidebar.='<li><a href="javascript:;" data-toggle="slidebar"><i class="'.$item->icon.'"></i>'.$item->description.'</a>
            <div class="items hide" data-noinit="true">';
                foreach ($item['child'] as $ite){
                    $sidebar.='<ul id="bjui-doc-tree-base" class="ztree ztree_main" data-toggle="ztree"
                            data-on-click="MainMenuClick" data-expand-all="'.$ite->data_fresh.'" data-faicon="'.$ite->icon.'"
                            data-tit="'.$ite->description.'">';

                    foreach ($ite['child'] as $it){
                        $sidebar.='<li data-id="'.$it->data_id.'" data-pid="'.$it->data_pid.'" data-faicon="'.$it->icon.'" data-url="{{url('.$it->route.')}}" data-fresh="'.$it->data_fresh.'" data-tabid="'.$it->tab_id.'"data-faicon-close="'.$it->icon_close.'">
                                菜单管理
                            </li>';

                    }
                    $sidebar.='</ul>';
                }

                $sidebar.='</div></li>';

        }

        return $sidebar;
    }

    /**
     * 渲染面包屑导航条视图
     *
     * @param  array  $menus
     * @param  string $route
     *
     * @return mixed
     */
    public function renderBreadcrumbs(array $menus, $route)
    {
        $breadcrumbs = Cache::get(self::BREADCRUMBS_MENUS_CACHE . $route);
        if($breadcrumbs){
            return $breadcrumbs;
        } else {
            $array = self::buildBreadcrumbsArray($menus, $route);
            $breadcrumbs = self::makeBreadcrumbs($array);
            Cache::forever(self::BREADCRUMBS_MENUS_CACHE . $route, $breadcrumbs);

            return $breadcrumbs;
        }
    }

    /**
     * 生成面包屑
     *
     * @param array $array
     *
     * @return string
     */
    protected static function makeBreadcrumbs(array $array)
    {
        $array = two_dimensional_array_sort($array, 'sort', SORT_ASC);
        $breadcrumbs = '<ol class="breadcrumb">';
        foreach ($array as $key => $value) {

            if(count($array) == $key + 1){
                $breadcrumbs .= '<li class="active">';
            } else {
                $breadcrumbs .= '<li>';
            }

            if($value['route']){
                if(Route::has($value['route'])){
                    $breadcrumbs .= '<a href="' . route($value['route']) . '">';
                } else {
                    $breadcrumbs .= '<a href="#">';
                }
            } else {
                $breadcrumbs .= '<a href="#">';
            }

            if($value['icon']){
                $breadcrumbs .= '<i class="fa ' . trans($value['icon']) . '"></i> ';
            }
            $breadcrumbs .= trans($value['name']);
            $breadcrumbs .= '</a>';
            $breadcrumbs .= '</li>';
        }
        $breadcrumbs .= '</ol>';

        return $breadcrumbs;
    }
}
