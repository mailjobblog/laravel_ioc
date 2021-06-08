<?php
namespace App\Services;

use App\Interfaces\TestIocInterface;

class TestIocService implements TestIocInterface
{
    public function test_string(string $string): string
    {
        return "你的字符串返回结果是 {$string}";
    }
}
