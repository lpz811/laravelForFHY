<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Request $request   提交搜索请求
     * @param $model             传递数据库模型
     * @return mixed
     */
    public  function searchInfo($request,$model)
    {
        $requests = $request->all();
        $orderField= substr($requests['orderField'], 0, 1 )=='$' ? 'id':$requests['orderField'];
        $orderDirection=substr($requests['orderDirection'],0,1)=='$'?'asc':$requests['orderDirection'];

        $data['info'] = $model::multiwhere($requests['search'],'like')->orderBy($orderField,$orderDirection)->skip(($requests['pageCurrent'] - 1) * $requests['pageSize'])->take($requests['pageSize'])->get();
        $data['pageSize']=$requests['pageSize'];
        $data['pageCurrent']=1;
        $data['total']=$data['info']->count();
        return $data;
    }

}
