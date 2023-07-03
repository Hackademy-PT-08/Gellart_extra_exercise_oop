<?php

class Moovie{
    public $title;
    public $director;
    public $time;
    public $year;
    public $type;
    public static $count = 0;

    public function __construct($_title, $_director, $_time, $_year, $_type){
        
        $this-> title = $_title;
        $this-> director = $_director;
        $this-> time = $_time;
        $this-> year = $_year;
        $this-> type = $_type;
        self::$count++;
    }

    public static function getCount(){
        return self::$count;
    }

    public function __toString(){
        return "Title : " . $this->title . "" . "Director" . $this->director . "" . "Time" . $this->time . "" . "Year" . $this-> year. "" . "Type" . $this->type;
    }
};

$moovie1 = new Moovie("spiderman across the spider verse", "Kemp Powers", 2, 2023, "animation" );
$moovie2 = new Moovie("The strangers", "Bryan Bertino", "85 min", 2008, "horror" );
$moovie3 = new Moovie("Howl castle", "Hayao Miyazaki", "1h 59 min", 2004, "animation" );

echo $moovie1 . "\n";
echo $moovie2 . "\n";
echo $moovie3 . "\n";