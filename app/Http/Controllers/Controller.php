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
    public function responseJson($data, $code = 200)
    {
        return response()->json($data, $code);
    }

    protected function ajaxReturn($data) {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode($data));
    }
    public function successBackTo($message)
    {
        return redirect()->back()->withSuccess($message);
    }

    protected function checkForm($requestForm,$request){
        $validator = \Validator::make($request->all(),$requestForm->rules(),$requestForm->messages());
        $errors=$validator->errors();
        $value = array_first($errors->getMessages(), function ($key, $value) {
            return $value;});
        if ($validator->fails()) {
            $this->ajaxReturn(['message'=>$value,'statusCode'=>300]);
        }
    }

}
