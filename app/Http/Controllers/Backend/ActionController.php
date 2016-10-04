<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\ActionUpdateForm;
use App\Http\Requests\Backend\ActionCreateForm;
use App\Facades\Backend\ActionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Router;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize = config('repository.pageSize');
        $data['info'] = ActionRepository::paginate($pageSize);
        $data['total'] = $data['info']->total();
        $data['pageCurrent']=1;
        $data['pageSize'] = $pageSize;
        return view('backend.action.index', compact("data"));
    }

    public function search(Request $request)
    {
        $data=ActionRepository::searchInfo($request);
        $search=$request->input('search');
        return view("backend.action.index",compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Router $router)
    {
        /*$actions = ActionRepository::getActionsByRoutes($router->getRoutes()->getRoutes());
        dd($actions);*/
        return view('backend.action.create', compact('actions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actionCreateForm =new  ActionCreateForm();
        $this->checkForm($actionCreateForm,$request);


        try {
            if(ActionRepository::create($request->all())){
                $this->ajaxReturn(['message'=>'添加操作成功！','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'actionslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Router $router,$id)
    {
        $data = ActionRepository::find($id);
        return view('backend.action.edit', compact('data'));
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
        $actionUpdateForm =new   ActionUpdateForm();
        $this->checkForm($actionUpdateForm,$request);

        try{
            $action = ActionRepository::find($id);
            if($action->update($request->all())){
                $this->ajaxReturn(['message'=>'操作编辑成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'actionslist']);
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
        try {
            if (ActionRepository::destroy($id)) {
                $this->ajaxReturn(['message'=>'删除操作成功','statusCode'=>200,'tabid'=>'actionslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }

    /**删除所选操作
     * @param Request $request
     */
    public function selectdelete(Request $request){
        try {
            if (ActionRepository::destroy($request->input('ids'))) {
                $this->ajaxReturn(['message'=>'所选操作删除成功','statusCode'=>200,'tabid'=>'actionslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }
}
