<?php
/**
 * Created by PhpStorm.
 * User: parker
 * Date: 2019/9/19
 * Time: 下午4:41
 */

namespace App\Http\Service;

use App\Http\Model\TestModel;
use Illuminate\Support\Facades\DB;

class InfoService
{
    public static function getList()
    {
        $list = TestModel::getList();
//        var_dump($list->id);
//        var_dump($list->name);
        Redis::set('name', 'guwenjie');
        $values = Redis::get('name');
        dd($values);

        foreach ($list as $key => $value) {
            echo '<hr>';
            var_dump($value->id);
            var_dump($value->name);
        }
        dd(1);
        return $list;
    }
}