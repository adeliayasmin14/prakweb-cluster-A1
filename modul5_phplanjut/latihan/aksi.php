<?php 
$data;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['nama'];
} else if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $data = $_GET['nama'];
}

echo $data;