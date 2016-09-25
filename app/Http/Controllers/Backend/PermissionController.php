<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\PermissionUpdateForm;
use App\Http\Requests\Backend\PermissionCreateForm;
use App\Facades\Backend\PermissionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize = config('repository.pageSize');
        $data['info']= PermissionRepository::paginate($pageSize);
        $data['total'] = $data['info']->total();
        $data['pageCurrent']=1;
        $data['pageSize'] = $pageSize;
        return view('backend.permission.index', compact("data"));
    }

    public function search(Request $request)
    {
        $data=PermissionRepository::searchInfo($request);
        $search=$request->input('search');
        return view("backend.permission.index",compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.permission.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissionCreateForm =new PermissionCreateForm();
        $this->checkForm($permissionCreateForm,$request);
        try {
            if (PermissionRepository::create($request->all())) {
                $this->ajaxReturn(['message'=>'权限添加成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'permissionslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PermissionRepository::find($id);
        return view('backend.permission.edit', compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permissionUpdateForm =new PermissionUpdateForm();
        $this->checkForm($permissionUpdateForm,$request);
        try{
            $permission = PermissionRepository::find($id);
            if($permission->update($request->all())){
                $this->ajaxReturn(['message'=>'权限编辑成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'permissionslist']);
            }
        }catch (\Exception $e){
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
