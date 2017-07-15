<?php

class House1
{
    protected $doors;
    protected $windows;
    public static $count;
    public static $type = " типа 1<br>";

    public function __construct($d,$w)
    {
        $this->doors = $d;
        $this->windows  = $w;
        static::$count++;

        $this->aboutHouse();
    }

    public function aboutHouse()
    {
        echo "<br>Строим дом номер ".static::$count.static::$type;
        echo "<br>Количество окон: ".$this->windows;
        echo "<br>Количество дверей: ".$this->doors."<br>";

    }

}