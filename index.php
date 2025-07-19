<html>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <!--form -->
    <form method="post" action="simpan.php">
        <label>Nama:</label><br />
        <input type="text" name="nama" required /><br /><br />
        <label>Pesan:</label><br />
        <textarea name="pesan" required></textarea><br /><br />
        <button type="submit">Kirim Datang</button>
    </form>
    <?php
    include 'koneksi.php';
    $sql = 'select * from bukutamu order by id desc';
    $data = mysqli_query($koneksi, $sql);
    echo '<h2>Daftar Buku Tamu</h2>';
    //untuk megeluarkan semua data selama masih ada
    while ($row = mysqli_fetch_array($data)) {
        echo '<p><b>' . htmlspecialchars($row['nama']) . '</b>: ' . htmlspecialchars($row['pesan']) . '</p>';
    }
    ?>
</body>

</html>