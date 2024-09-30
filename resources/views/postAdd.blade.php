<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>글 작성</title>
    {{--    Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>

<body>
    <div class="container w-50">
        <form action="" autocomplete="off">
            <div class="mt-4 mb-3">
                <span class="h2">Board</span>
            </div>
            <div class="mb-2">
                <input type="text" name="subject" class="form-control" placeholder="Input Title">
            </div>
            <div>
                <textarea name="content" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mt-2">
                <button class="btn btn-primary">Write</button>
            </div>
        </form>
    </div>
</body>

</html>
