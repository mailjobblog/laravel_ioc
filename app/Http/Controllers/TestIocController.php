<?php

namespace App\Http\Controllers;

use App\Interfaces\TestIocInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestIocController extends Controller
{
    /**
     * demo1： 调用方法
     *
     * @param TestIocInterface $test
     */
    public function test(TestIocInterface $test)
    {
        echo $test->test_string("啦啦啦啦啦");
    }

    /**
     * 单例调用方法
     */
    public function test2()
    {
        $testIoc = App::make('TestIocInterface');
        echo $testIoc->test_string("啦啦啦啦啦");
    }
}
