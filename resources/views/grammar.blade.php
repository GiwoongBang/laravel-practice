<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Grammar</title>
</head>

<body>
    <h1>For Blade Grammar</h1>
    <p>@{{ $variable }}: {!! $variable !!}</p>

    <p>현재 시간은 <b>{{ NOW() }}</b> 입니다.</p>

    @for ($i = 1; $i <= 10; $i++)
        Increase Number: {{$i}} <br>
    @endfor

    @php
        $a = 10;
        $a ++;
        echo '<p>a의 값은 ' . $a . '입니다.</p>';
    @endphp

    @include('./common/version')
    @includeIf('./common/version')
</body>

</html>
