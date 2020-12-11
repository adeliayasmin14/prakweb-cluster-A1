<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Buku Tamu</title>
</head>
<body>
    <h1>Simpan Buku Tamu MySQLi</h1>
    <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
        $conn = mysqli_connect("localhost", "root", "", "mahasiswa") or die("gagal konek database");
        echo "Nama      : $nama<br>";
        echo "email      : $email<br>";
        echo "komentar      : $komentar<br>";
        $query = "insert into bukutamu (nama, email, komentar) values ('$nama', '$email', '$komentar')";
        $result = mysqli_query($conn, $query);
        if($result) {
            echo "Simpan bukutamu berhasil dilakukan";
        } else {
            echo "gagal tersimpan";
        }
    ?>
</body>
</html>