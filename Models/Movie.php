<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    // costruttore della classe Movie
    function __construct($_title, $_genres, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genres;
        $this->year = $_year;
    }

    // metodo per calcolare quanti anni sono passati dall'uscita del film
    public function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }

    public function getGenresAsString()
    {
        // creo l'array vuoto che conterrà il nome dei generi dei film
        $genres = [];

        // riempio l'array con i nomi dei generi
        foreach ($this->genre as $genre) {
            array_push($genres, $genre->name);
        }

        // converto l'array in stringa separando i generi con /
        $genres_string = implode('/', $genres);

        // restituisco la stringa
        return $genres_string;
    }
}
