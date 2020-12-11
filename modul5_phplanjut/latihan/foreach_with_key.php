<?php
$product_price = array(
                    "kopi" => 10000,
                    "teh" => 4000,
                    "air putih" => 500
);

$no = 1;
foreach($product_price as $product => $price) {
    echo $no . ". " . ucfirst($product) . " : " . $price . "/pcs<br>";
    $no++;
}