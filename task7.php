<?php

$sort = function ($a, $b) {
    if ($a->price === $b->price) {
        return strcmp($a->name, $b->name);
    }

    return ($a->price < $b->price) ? -1 : 1;
};

$sortByPriceAscending = function ($jsonStr) use ($sort) {
    $json = json_decode($jsonStr);
    usort($json, $sort);
    return json_encode($json);
};


echo $sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":4.04},{"name":"rice","price":4.04}]');
