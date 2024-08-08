<?php

namespace App\Http\Controllers;

use App\Models\Genes;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movies::all();
        return view('movies.index', compact('movies'));
    }



    public function create()
    {
        $genes = Genes::all();
        return view('movies.create', compact('genes'));
    }



    public function store(Request $request)
    {
        $data = $request->except('poster');
        $data['poster'] = "";
        if ($request->hasFile('poster')) {
            // Upload file
            $path_image = $request->file('poster')->store('images');
            $data['poster'] = $path_image;
        }
        // dd($data);

        Movies::query()->create($data);

        return redirect()->route('movie.index');
    }

    public function destroy(Movies $id)
    {
        $id->delete();
        return redirect()->route('movie.index');
    }



    public function edit(Movies $id)
    {
        // dd($movies);
        $genes = Genes::all();
        return view('movies.edit', compact('genes', 'id'));
    }


    public function update(Request $request, Movies $id)
    {

        // dd($id);
        $data = $request->except('poster');
        $old_image = $id->poster;

        // Không cập nhật ảnh
        $data['poster'] = $old_image;

        // Cập nhật ảnh
        if ($request->hasFile('poster')) {
            $path_image = $request->file('poster')->store('images');
            $data['poster'] = $path_image;
        }

        // Cập nhật lên DB
        $id->update($data);

        if (isset($path_image)) {
            if (file_exists('storage/' . $old_image)) {
                unlink('storage/' . $old_image);
            }
        }


        return redirect()->route('movie.index');
    }


    public function detail(Movies $id){
        return view('movies.detail', compact('id'));

    }

}

