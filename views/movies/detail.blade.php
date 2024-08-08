<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>

    <div class="blobk-detail">
        <h1>Chi tiết</h1>
        <h3>{{$id->title}}</h3>
        <img src="{{asset('/storage/' . $id->poster)}}" alt="" width="200">
        <p>{{$id->intro}}</p>
        <p>{{$id->release_date}}</p>
        <p>{{$id->genes->name}}</p>
        <a href="{{ route('movie.index') }}" class="btn btn-success">List</a>
    </div>
    
</body>
</html>