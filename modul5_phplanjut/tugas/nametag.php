<?php

function nametag($name, $color = 'red') {
    $name_length = strlen($name);
    $harga;
    echo "<p style='color:$color'> " . ucwords($name) . "</p>";
    echo "Harga nametag: ";
    $name_length <= 10 ? $harga = $name_length * 300 
                    : $name_length <= 20 ? $harga = $name_length * 500
                                    : $harga = $name_length * 700;
    echo $harga;
}

nametag('Adelia Yasmin');