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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $role = RoleRepository::find($id);

        $info=array();
            if($role->update($request->input('data'))){
                $info['message']='编辑角色成功';
                $info['statusCode']=200;

            }else{
                $info['message']='编辑角色失败';
                $info['statusCode']=300;

            }
            echo json_decode($info);


        return $this->responseJson($info);

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
