<?php

namespace App\Http\Controllers\Backend;

use App\Facades\RoleRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['info'] = RoleRepository::paginate(config('repository.pageSize'));
        $data['total'] = $data['info']->total();
        $data['pageCurrent'] = 1;
        return view('backend.role.index', compact("data"));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $data=RoleRepository::searchInfo($request);
        $search=$request->input('search');
        return view("backend.role.index",compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data=$request->all();
            if (RoleRepository::create($data['data'])) {
                $this->ajaxReturn(['message'=>'角色添加成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'roleslist']);
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
        $data = RoleRepository::find($id)->toArray();
        return view('backend.role.edit', compact('data'));
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

        try{
            $data=$request->input('data');
            if($post = RoleRepository::firstByWhere([['name','=',$data['name']]])){
               $this->ajaxReturn(['message'=>'角色标识已存在！','statusCode'=>300]);
            }
            $role = RoleRepository::find($id);
            if($role->update($data)){
               $this->ajaxReturn(['message'=>'编辑角色成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'roleslist']);
            }
        }catch (\Exception $e){
            $this->ajaxReturn(['message'=>'编辑角色失败','statusCode'=>300]);
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
        //
    }
}
