<?php

namespace App\Repositories\Backend;

use Cache;

/**
 * User Model Repository
 */
class AdminRepository extends CommonRepository
{
    /**
     *  菜单权限缓存标识
     */
    const ADMIN_MENU_PERMISSIONS_CACHE = "admin_menu_permissions_cache";

    /**
     * 操作权限缓存标识
     */
    const ADMIN_ACTION_PERMISSIONS_CACHE = "admin_action_permissions_cache";

    /**
     * 根据用户模型获取用户的菜单权限
     *
     * @param $user
     *
     * @return array|mixed
     */
    public function getAdminMenusPermissionsByUserModel($user)
    {
        $routes = Cache::get(self::ADMIN_MENU_PERMISSIONS_CACHE . $user->id);

        if(empty($routes)){

            $roles = $user->roles;

            $permissions = [];
            foreach ($roles as $key => $role) {
                $permissions[] = $role->perms;
            }

            $menus = [];
            foreach ($permissions as $permission) {
                foreach ($permission as $item) {
                    if($item->type != 'menu'){
                        continue;
                    }
                    $menus[] = $item->menus->toArray();
                }
            }

            foreach ($menus as $menu) {
                foreach ($menu as $value) {
                    $routes[] = $value['route'];
                }
            }

            if($routes){
                $routes = array_unique($routes);
            }

            Cache::forever(self::ADMIN_MENU_PERMISSIONS_CACHE . $user->id, $routes);
        }

        return $routes;
    }

    /**
     * 根据用户模型获取用户的操作权限
     *
     * @param $user
     *
     * @return array|mixed
     */
    public function getAdminActionPermissionsByUserModel($user)
    {
        $actions = Cache::get(self::ADMIN_ACTION_PERMISSIONS_CACHE . $user->id);

        if(empty($actions)){
            $roles = $user->roles;
            $permissions = [];
            foreach ($roles as $key => $role) {
                $permissions[] = $role->perms;
            }

            $actionNames = [];
            foreach ($permissions as $permission) {
                foreach ($permission as $item) {
                    if($item->type != 'action'){
                        continue;
                    }
                    $actionNames[] = $item->actions->toArray();
                }
            }

            foreach ($actionNames as $action) {
                foreach ($action as $value) {
                    $actions[] = $value['action'];
                }
            }

            if($actions){
                $actions = array_unique($actions);
            }
            Cache::forever(self::ADMIN_ACTION_PERMISSIONS_CACHE . $user->id, $actions);
        }

        return $actions;
    }

    /**
     * 删除缓存
     */
    public function clearCache()
    {
        foreach (\App\Facades\AdminRepository::all() as $user) {
            Cache::forget(self::ADMIN_MENU_PERMISSIONS_CACHE . $user->id);
            Cache::forget(self::ADMIN_ACTION_PERMISSIONS_CACHE . $user->id);
        }
    }

    /**
     * 根据用户 ID 查询用户资料详情
     *
     * @param $id
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getAdminProfileById($id)
    {
        return $this->model->with('profile')->find($id);
    }
}
