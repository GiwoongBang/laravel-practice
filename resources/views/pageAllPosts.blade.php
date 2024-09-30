<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination - All Posts</title>
    {{--    Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container w-auto">
        <table class="table mt-5">
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Name</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->subject}}</td>
                    <td>{{$post->name}}</td>
                </tr>
            @endforeach
        </table>

        {{$posts->links()}}
    </div>
</body>

</html>
