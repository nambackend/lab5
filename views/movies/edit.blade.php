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
    <h1>Sửa</h1>
    <form action="{{ route('movie.update', $id->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">title</label>
            <input type="text" class="form-control" id="" name="title" value="{{ $id->title }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">poster</label>
            <img src="{{ asset('/storage/' . $id->poster) }}" alt="" width="200">
            <input type="file" class="form-control" id="" name="poster" value="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">intro</label>
            <input type="text" class="form-control" id="" name="intro"
                value="{{ $id->intro }}">
        </div>

        
        <div class="mb-3">
            <label for="" class="form-label">release_date</label>
            <input type="date" class="form-control" id="" name="release_date" value="{{ $id->release_date }}">
        </div>



        <div class="mb-3">
            <label for="" class="form-label">genes_name</label>
            <select name="genes_id" id="">
                @foreach ($genes as $gene)
                    <option value="{{ $gene->id }}" @if ($gene->id === $id->genes_id) selected @endif>
                        {{ $gene->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('movie.index') }}" class="btn btn-success">List</a>

        </div>

    </form>
</body>

</html>
