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
    <h1>Thêm mới</h1>
    <form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" id="" name="title" value="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">poster</label>
            <input type="file" class="form-control" id="" name="poster" value="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">intro</label>
            <input type="text" class="form-control" id="" name="intro" value="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">release_date</label>
            <input type="date" class="form-control" id="" name="release_date" value="">
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Genens Name</label>
            <select name="genes_id" id="">
                @foreach ($genes as $gene)
                    <option value="{{ $gene->id }}">
                        {{ $gene->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add new</button>
            <a href="{{ route('movie.index') }}" class="btn btn-success">List</a>

        </div>

    </form>
</body>

</html>
