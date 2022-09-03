<?php

$alphabet = range('A', 'Z');
array_unshift($alphabet, '');

$numbersToLetters = function ($str) use ($alphabet) {

    $wordsArr = explode("+", $str);

    $words = array_map(function ($word) use ($alphabet) {
        $word = explode(" ", $word);
        $wordArr = array_map(function ($char) use ($alphabet) {return $alphabet[$char];}, $word);
        return implode("", $wordArr);
    }, $wordsArr);

    return implode(" ", $words);
};

echo $numbersToLetters('8 5 12 12 15+23 15 18 12 4');
