<?php
    // udah terlanjur buat db mahasiswa
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");
    $hasil = mysqli_query($conn, "select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo "<center>Daftar Pengunjung</center>";
    echo "Jumlah Pengunjung: $jumlah";
    $no = 1;
    while($row = mysqli_fetch_array($hasil)) {
        echo "<br>";
        echo $no;
        echo "<br>";
        echo "Nama : " . $row[0] . "<br>";
        echo "Email : " . $row[1] . "<br>";
        echo "Komentar : " . $row[2] . "<br>";
        $no++;
    }