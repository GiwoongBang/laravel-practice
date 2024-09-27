<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArrayController extends Controller
{
    public function index()
    {
        // 조건에 만족하는 값 중 제일 처음(first) | 마지막(last) 값
        $array = [100, 200, 500, 400, 300, 400];
        $result = Arr::last($array, function($value, $key) {
            return $value >= 200;
        });
        echo $result . '<br><br>';

        // 기존 배열 복사해서 새로운 배열 추가
        // 단 기존 값이 null | key가 없는 경우에만 값 추가 또는 변경 가능
        $array = ['name' => 'desk'];
        $result = Arr::add($array, 'price', 100);
        print_r($result);
        echo '<br><br>';

        $array = ['name' => 'desk', 'price' => null];
        $result = Arr::add($array, 'price', 300);
        print_r($array);
        print_r($result);
        echo '<br><br>';

        // 다차원 배열을 1차원 배열로 변형
        $array = ['name' => 'Joe', 'language' => ['PHP','Laravel']];
        print_r($array);
        echo '<br><br>';

        $result = Arr::flatten($array);
        print_r($result);
        echo '<br><br>';

        // dot 표기법으로 변경 (ex. products.desk.color => red
        $array = ['products' => ['desk' => ['color' => 'red', 'price' => 100], 'tv' => ['color' => 'big', 'price' => 500]]];
        $result = Arr::dot($array);
        print_r($result);
        echo '<br><br>';

        // 배열의 요소를 dot 표기법으로 호출 (배열 요소 없는 경우, 기본값 설정 가능)
        $array = ['products' => ['desk' => ['color' => 'red', 'price' => 100], 'tv' => ['color' => 'big', 'price' => 500]]];
        $result = Arr::get($array, 'products.desk.colsor', 'undefined');
        print_r($result);
        echo '<br><br>';

        // 배열의 요소 사이에 특정 문자(열) 삽입
        $array = ['my', 'skillSetx', 'is', 'java', 'spring'];
        $result = Arr::join($array, ' and ');
        echo $result;
    }
}
