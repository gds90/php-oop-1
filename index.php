<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    // costruttore della classe Movie
    function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    // metodo per calcolare quanti anni sono passati dall'uscita del film
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }
}
// creo 2 istanze della classe Movie
$movie_1 = new Movie("Pulp Fiction", "Thriller", 1994);
$movie_2 = new Movie("Inception", "Crime", 2010);

$movie_1->director = "Quentin Tarantino";
$movie_2->director = "Christopher Nolan";
