<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    public function index()
    {
        echo '<h1>String Controller - String Helper</h1><br>';

        // 주어진 문자(열)(Str::of)에 대해 특정 문자(열)(after) 기준, 그 앞의 문자(열) 출력
        echo "Str::of('Welcome to my Project') -> after('Welcome to');";
        $rs = Str::of('Welcome to my Project')->after('Welcome to');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 주어진 문자(열)(Str::of)에 대해 특정 문자(열)(before) 기준, 그 앞의 문자(열) 출력
        echo "Str::of('Welcome to my Project') -> before('my Project');";
        $rs = Str::of('Welcome to my Project')->before('my Project');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 주어진 문자(열)(Str::of)에 대해 특정 문자(열)(afterLast)이 등장하는 맨 마지막 지점 기준, 그 뒤로 출력
        echo "Str::of('010-1234-5678') -> afterLast('-1');";
        //$rs = Str::of('aaa.bbb.jpg') -> afterLast('.'); // 확장자 추출
        $rs = Str::of('010-1234-5678')->afterLast('-1');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 문자(열) 대체
        echo "Str::of('Laravel 9.0') -> replace('9.0', '10.0');";
        $rs = Str::of('Laravel 9.0')->replace('9.0', '10.0');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // replace와 기본적으로 비슷하나, default는 공백(띄어쓰기)에 '-' 삽입
        echo "Str::of('Laravel 10 Framework') -> slug();";
        $rs = Str::of('Laravel 10 Framework')->slug();
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 특정 문자(열) 반복
        echo "Str::of('Bplus ') -> repeat(10);";
        //$rs = Str::of('Bplus ')->repeat(10);
        $rs = Str::repeat('Bplus ', 5);
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 랜덤 문자 생성
        echo "Str::random('40');";
        $rs = Str::random('40');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 특정 문자(열) 삭제
        echo "Str::remove('A', 'Apple starts with 'A');";
        //$rs = Str::of('Apple starts with \'A\'')->remove('A');
        $rs = Str::remove('A', 'Apple starts with \'A\'');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 특정 문자(열) 포함 여부(있으면 1, 없으면 '')
        echo "Str::of('Bplus Credential')->contains('ks');";
        $rs = Str::of('Bplus Credential')->contains('ks');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 특정 문자(열) 모두 대문자 / 소문자로 변환
        echo "Str::of('Bplus Credential')->contains('ks');";
        echo 'upper: ' . Str::upper('Bplus Credential') . '<br>';
        echo 'lower: ' . Str::upper('Bplus Credential') . '<br><br><br>';

        // 특정 문자(열) 구간 추출: index 기준, n번째부터 m개 문자(열)
        echo "Str::of('Bplus Credential')->substr(0, 5);";
        $rs = Str::of('Bplus Credential')->substr(0, 5);
        echo '<br><br>결과: ' . $rs . '<br><br><br>';

        // 문자열 이어 붙이기
        echo "Str::of('Bplus Credential ')->append('System');";
        $rs = Str::of('Bplus Credential ')->append('System');
        echo '<br><br>결과: ' . $rs . '<br><br><br>';
    }
}
