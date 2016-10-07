<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin;


use Rry\Reminder\Reminder;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * 登录认证控制器
 *
 * @package App\Http\Controllers\Auth
 */
class IndexController extends Controller
{
   public function index(){
     return view('backend.index.index');
   }

}

