<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Home
     */

    public function index() {

        // Movie from db
        $movies = Movie::all();
        // dump($movies);

        // view
        return view('home', compact('movies'));
    }
}
