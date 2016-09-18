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
     * JSON 响应
     *
     * @param     $data
     * @param int $code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseJson($info)
    {
         // json_decode('佳佳',200);
        die(json_decode($info));
    }



}
