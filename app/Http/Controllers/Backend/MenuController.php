<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\MenuCreateForm;
use App\Facades\Backend\MenuRepository;
use App\Http\Requests\Backend\MenuUpdateForm;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize = config('repository.pageSize');
        $data['info']= MenuRepository::paginate($pageSize);
        $data['total'] = $data['info']->total();
        $data['pageCurrent']=1;
        $data['pageSize'] = $pageSize;
        return view('backend.menu.index', compact("data"));
    }

    public function search(Request $request)
    {
        $data=MenuRepository::searchInfo($request);
        $search=$request->input('search');
        return view("backend.menu.index",compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tree = create_level_tree(MenuRepository::getAllDisplayMenus());
        return view('backend.menu.create', compact('tree'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $menuCreateForm =new MenuCreateForm();
        $this->checkForm($menuCreateForm,$request);
        try {
            if(MenuRepository::create($request->all())){
                $this->ajaxReturn(['message'=>'添加菜单成功！','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'menuslist']);
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
    public function edit($id)
    {
        $data = MenuRepository::find($id);
        $tree = create_level_tree(MenuRepository::getAllDisplayMenus());

        return view('backend.menu.edit', compact('tree', 'data'));
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
        $menuUpdateForm =new MenuUpdateForm();
        $this->checkForm($menuUpdateForm,$request);
         $data = $request->except(['_token', '_method']);
        try {
            if(MenuRepository::saveById($id,$data)){

                $this->ajaxReturn(['message'=>'菜单编辑成功！','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'menuslist']);
            }
        }
        catch (\Exception $e) {
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
            if (MenuRepository::destroy($id)) {
                $this->ajaxReturn(['message'=>'删除菜单成功','statusCode'=>200,'tabid'=>'menuslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }


    /**删除所选菜单
     * @param Request $request
     */
    public function selectdelete(Request $request){
        try {
            if (ActionRepository::destroy($request->input('ids'))) {
                $this->ajaxReturn(['message'=>'所选菜单删除成功','statusCode'=>200,'tabid'=>'menuslist']);
            }
        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>$e->getMessage(),'statusCode'=>300]);
        }
    }
}
