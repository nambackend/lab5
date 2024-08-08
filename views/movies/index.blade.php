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

    @auth
        <div>
            Username: {{ Auth::user()->username }}
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    @endauth

    <table class="table">
        <thead>

            <tr>
                <th scope="col">title</th>
                <th scope="col">poster</th>
                <th scope="col">intro</th>
                <th scope="col">release_date</th>
                <th scope="col">genre_name</th>
                <th scope="col">action</th>
                <th scope="col">
                    <a href="{{ route('movie.create') }}" class="btn btn-success">Create New</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                     {{--   --}}
                    <th>{{ $movie->title }}</th>
                    <td><img src="{{asset('/storage/' . $movie->poster)}}" alt="" width="200"></td>
                    <td>{{ $movie->intro }}</td>
                    <td>{{ $movie->release_date }}</td>
                    <td>{{ $movie->genes->name }}</td>
                    <td style="display: flex; gap: 10px; border: none;">

                        <a href="{{ route('movie.detail', $movie->id) }}" class="btn btn-primary">Chi tiết</a>
                        <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-success">Edit</a>
                    
                        <form action="{{ route('movie.destroy', $movie->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Bạn có muốn xóa không')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
