<?php

namespace App\Http\Controllers\Backend;


use App\Facades\Backend\ActionRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
    public function create()
    {
        //$actions = ActionRepository::getActionsByRoutes($router->getRoutes()->getRoutes());

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
        //
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
        //
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
