<?php

function findLastKey ($haystack, $needle) {
    return array_search($needle, array_reverse($haystack));
}

echo findLastKey(['Hello' => 'Green', 'PHP' => 'Blue', 'World' => 'Blue'], 'Blue');
