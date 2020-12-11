<?php
    $kolom = $_POST['kolom'];
    $cari = $_POST['cari'];
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa") or die("gagal koneksi database");
    $hasil = mysqli_query($conn, "select * from bukutamu where $kolom like '%$cari%'");
    $jumlah = mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    while($row = mysqli_fetch_array($hasil)) {
        echo "<br>";
        echo "Nama : " . $row[0] . "<br>";
        echo "Email : " . $row[1] . "<br>";
        echo "Komentar : " . $row[2] . "<br>";
    }