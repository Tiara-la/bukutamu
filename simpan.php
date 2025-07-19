<?php
//memanggil koneksi.php untuk fungsi memanggil variabel $koneksi
include 'koneksi.php';

//variable dimulai dengan tanda $
//variable namaorang bertipe string
$namaorang = $_POST['nama'];
$pesan = $_POST['pesan'];

// memasukan data
$sql = "insert into bukutamu(nama,pesan) values ('$namaorang', '$pesan')";
mysqli_query($koneksi, $sql);

?>
<!--echo untuk print atau menampilkan variable php dalam html, 
    tapi harus diawal dengan tag pembuka dan penutup -->
Terima kasih <?php echo $namaorang ?>, pesan anda: <?php echo $pesan ?><br /> <br />
<a href="index.php">Kembali ke Form</a>