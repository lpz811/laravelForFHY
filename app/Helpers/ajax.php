<?php
if( ! function_exists('ajax_return')){

    /**
     * 随机返回数组中的值
     *
     * @param  $array
     *
     * @return mixed
     */
    function ajax_return($data)
    {
        header('Content-Type:application/json; charset=utf-8');
        exit(json_encode($data));
    }
}