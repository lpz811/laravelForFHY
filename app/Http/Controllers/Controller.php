<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


   /* public  function searchInfo($request,$model)
    {
        try {
            $requests = $request->all();

            $orderField = substr($requests['orderField'], 0, 1) == '$' ? 'id' : $requests['orderField'];

            $orderDirection = substr($requests['orderDirection'], 0, 1) == '$' ? 'asc' : $requests['orderDirection'];
            $data['info'] = $model::multiwhere($requests['search'], 'like')->orderBy($orderField, $orderDirection)->skip(($requests['pageCurrent'] - 1) * $requests['pageSize'])->take($requests['pageSize'])->get();
            $data['pageSize'] = $requests['pageSize'];
            $data['pageCurrent'] = $requests['pageCurrent'];
            $data['total'] = $model::multiwhere($requests['search'], 'like')->count();
            return $data;
        } catch (\Exception $e) {
              return $this->responseJson($e->getMessage(),300);
        }
    }*/


    /**
     * JSON 响应
     *
     * @param     $data
     * @param int $code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseJson($data, $code = 200)
    {
        return response()->json($data, $code);
    }



}
