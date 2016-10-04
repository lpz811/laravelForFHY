<?php

namespace App\Http\Controllers\Backend;

use App\Facades\Backend\AdminRepository;
use App\Facades\Backend\RoleRepository;
use App\Http\Requests\Backend\AdminUpdateForm;
use App\Models\Backend\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdminCreateForm;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
        $pageSize = config('repository.pageSize');
        $data['info'] = AdminRepository::paginate($pageSize);
        $data['total'] = $data['info']->total();
        $data['pageCurrent']=1;
        $data['pageSize'] = $pageSize;
        return view("backend.admin.index", compact('data'));
    }

    public function search(Request $request)
    {
        $data=AdminRepository::searchInfo($request);
        $search=$request->input('search');
        return view("backend.admin.index",compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = RoleRepository::all();
        return view('backend.admin.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adminCreateForm =new AdminCreateForm();
        $this->checkForm($adminCreateForm,$request);

        $data = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
        ];
        try {
            $roles = RoleRepository::getByWhereIn('id', $request['role_id']);

            if(empty($roles->toArray())){
                $this->ajaxReturn(['message'=>'用户角色已不存在,请重新打开此页面选择其他用户角色','statusCode'=>300]);
            }
            $admin = AdminRepository::create($data);
            if($admin){
                foreach ($roles as $role) {
                    $admin->attachRole($role);
                }
                $this->ajaxReturn(['message'=>'添加用户成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'adminslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = AdminRepository::find($id);
        $roles = RoleRepository::all();
        $adminRoles = $admin->roles->toArray();
        $displayNames = array_map(function ($value) {
            return $value['display_name'];
        }, $adminRoles);
        return view('backend.admin.edit', compact('admin', 'roles', 'adminRoles', 'displayNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $adminUpdateForm =new AdminUpdateForm();
        $this->checkForm($adminUpdateForm,$request);
        $admin = AdminRepository::find($id);
        $admin->name = $request['name'];
        $admin->email = $request['email'];

        if($request['password']){
            $admin->password = bcrypt($request['password']);
        }

        try {
            $roles = RoleRepository::getByWhereIn('id', $request['role_id']);

            if(empty($roles->toArray())){
                $this->ajaxReturn(['message'=>"用户角色不存在,请重新打开此页面选择其他用户角色",'statusCode'=>300]);
            }

            if($admin->save()){
                $admin->roles()->sync([]);
                foreach ($roles as $role) {
                    $admin->attachRole($role);
                }
                $this->ajaxReturn(['message'=>'编辑用户成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'adminslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            if (AdminRepository::destroy($id)) {
                $this->ajaxReturn(['message'=>'删除用户成功','statusCode'=>200,'tabid'=>'adminslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }

    /**删除所选用户
     * @param Request $request
     */
    public function selectdelete(Request $request){
        try {
            if (AdminRepository::destroy($request->input('ids'))) {
                $this->ajaxReturn(['message'=>'所选用户删除成功','statusCode'=>200,'tabid'=>'adminslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }
}
