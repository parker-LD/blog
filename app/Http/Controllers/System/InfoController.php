<?php
/**
 * Created by PhpStorm.
 * User: parker
 * Date: 2019/9/17
 * Time: 上午11:47
 */

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Service\InfoService;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function Index()
    {
        return view('system.index');
    }
    public function List()
    {
        $list = InfoService::getList();
        dd($list);
    }
    public function site()
    {
        echo 'site';
    }

}