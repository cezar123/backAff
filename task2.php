<?php

function keepOnlyInts ($arr) {
    foreach ($arr as $key => &$el) {
        if (! is_int($el)) {
            unset($arr[$key]);
        }
    }

    return array_values($arr);
}

print_r(keepOnlyInts([1, '5', 'a', 'b', 2]));
