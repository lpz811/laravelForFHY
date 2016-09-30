<?php

namespace App\Http\Middleware;

use App\Facades\Backend\AdminRepository;
use Auth, Route, URL;
use Closure;

class Authorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* 判断当前用户是否登录或缓存是否过期 */
        $user = Auth::user();
        if ( ! $user) {
            return redirect()->to('backend/logout');
        }
        //dd($request->all());

        /* 判断当前用户是否为超级管理员 */
        if ($user['is_super_admin']) {
            return $next($request);
        }

        /* 获取当前 URL 当前的路由、控制器方法和上一页 */
        $route = Route::current()->getName();
        $action = Route::current()->getActionName();




            if ($request->getMethod() == 'GET') {

                $menus = AdminRepository::getAdminMenusPermissionsByAdminModel($user);

                if ( ! $menus) {
                    ajax_return(['message'=>'您没有权限操作！！','statusCode'=>300]);

                }
                $menus=array_merge($menus,config('ui.without-verification-route'));
                if ( ! in_array($route, $menus)) {
                    ajax_return(['message'=>'您没有权限操作！！','statusCode'=>300]);
                }
            } else {
                $actions = AdminRepository::getAdminActionPermissionsByAdminModel($user);

                if ( ! $actions) {
                    ajax_return(['message'=>'您没有权限操作！！','statusCode'=>300]);
                }

                if ( ! in_array($action, $actions)) {
                    ajax_return(['message'=>'您没有权限操作！！','statusCode'=>300]);
                }
            }




        return $next($request);
    }
}
