<?php
/**
 * Created by PhpStorm.
 * User: parker
 * Date: 2019/9/19
 * Time: 下午4:58
 */

namespace App\Http\Model;


use App\Table\Test;
use Illuminate\Support\Facades\DB;

class TestModel
{
    public static function getList()
    {
        $users = Test::all();
        return $users;
    }
}