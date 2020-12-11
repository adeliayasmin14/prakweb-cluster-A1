<?php

function factorial($base) {
    // for ($i = $base; $i >= 0; $i--) {
        
    // }
    if($base == 0 || $base == 1) {
        return 1;
    } else {
        return $base * factorial($base-1);
    }
}

echo "5! = " . factorial(5);