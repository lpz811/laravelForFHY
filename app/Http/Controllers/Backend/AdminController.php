<?php

namespace App\Http\Controllers\Backend;

use App\Facades\AdminRepository;
use App\Facades\RoleRepository;
use App\Models\Backend\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Form\AdminCreateForm;
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
        $data['pageCurrent'] = 1;
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
    public function store(AdminCreateForm $request)
    {

        $data = [
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['password']),
        ];
        try {
            $roles = RoleRepository::getByWhereIn('id', $request['role_id']);

            if(empty($roles->toArray())){
                $this->ajaxReturn(['message'=>'1111','statusCode'=>300]);
            }

            $user = AdminRepository::create($data);
            if($user){

                foreach ($roles as $role) {
                    $user->attachRole($role);
                }
                $this->ajaxReturn(['message'=>'用户添加成功','statusCode'=>200,'closeCurrent'=>true,'tabid'=>'adminslist']);

            }

        }
        catch (\Exception $e) {
            $this->ajaxReturn(['message'=>'22','statusCode'=>300]);
        }
        /*$validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
