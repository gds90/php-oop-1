<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    function __construct($_title, $_genre, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    function getAge()
    {
        $currentYear = 2024;
        return $currentYear - $this->year;
    }
}
