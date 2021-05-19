<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie {

    public $title;
    public $description;

    public function __construct($title, $description = 'No desctiprion') {

        $this -> title = $title;
        $this -> description = $description;
    }

    public function getStr() {

        return 'Title: ' . $this -> title . " - " . 'Description: ' . $this -> description;
    }
}

class MoviesController extends Controller
{
    public function home() {

        $movie1 = new Movie('Star Wars', 'lorem ipsum');
        $movie2 = new Movie('The Lord of the Rings');
        $movie3 = new Movie('Star Trek', 'dolor sit amet');

        // dd($movie1, $movie2, $movie3);

        $movies = [
            $movie1,
            $movie2,
            $movie3
        ];

        $moviesStr = '';

        foreach ($movies as $movie) {
            
            $moviesStr .= $movie -> getStr() . "\n";
        }

        dd($moviesStr);

        return view('pages.home');
    }
}
