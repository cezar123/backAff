<?php

class Person {

    public int $height;
    public int $weight;

    public function __construct($height, $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    static function avgHeight ($persons) // : int|array as of php 8
    {
        $heights = array_map(function($person){return $person->height;}, $persons);
        if (!$heights) {
            return 0;
        }
        return array_sum($heights) / count($heights);
    }
}

$person1 = new Person(5, 10);
$person2 = new Person(6, 11);
$person3 = new Person(7, 12);
echo Person::avgHeight([$person1, $person2, $person3]);
