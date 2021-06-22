<?php
/**
 * Created by PhpStorm.
 * User: parker
 * Date: 2019/9/23
 * Time: 下午3:39
 */


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function Index()
    {
        return view('auth.login');
    }
    public function check()
    {
        dd($_REQUEST);
    }
    public function site()
    {
        echo 'site';
    }

}