<?php

function rotate90($mat) {
    $height = count($mat);
    $width = count($mat[0]);
    $mat90 = array();

    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $height; $j++) {
            $mat90[$height - $i - 1][$j] = $mat[$height - $j - 1][$i];
        }
    }

    return $mat90;
    }

    $mat = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    print_r($mat);
    //123
    //456
    //789

    echo '<br>';

    print_r(rotate90($mat));
    //741
    //852
    //963