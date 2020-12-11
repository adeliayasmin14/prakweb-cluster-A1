<?php 
    $nrp = $_GET['nrp'];
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");
    $query = mysqli_query($conn, "delete from mahasiswa where nrp='$nrp'");
    $result = mysqli_affected_rows($conn);
    if($result) {
        echo "<script>
                alert('Berhasil menghapus data');
                window.location.replace('index.php');
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data');
                window.location.replace('index.php');
              </script>";
    }

