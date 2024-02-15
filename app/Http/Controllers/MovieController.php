<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// IMPORTO IL MODEL
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        // Eseguo l'operazione che recuperi le informazioni del model Movie
        // Che fa riferimento al DB
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function show($param)
    {
        // Eseguo l'operazione che recuperi le informazioni del model Movie
        // Che fa riferimento al DB
        $movies = Movie::all();
        $movie = $movies->find($param);
        return view('show', compact('movie'));
    }
};
