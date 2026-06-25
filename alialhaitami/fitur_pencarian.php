<?php
include '../config/koneksi.php'; 

$keyword = "";
if (isset($_GET['cari'])) {
    $keyword = $_GET['cari'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Fitur Pencarian Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f9f9f9; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #3498db; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        input[type="text"] { padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 8px 15px; background-color: #2ecc71; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #27ae60; }
    </style>
</head>
<body>

<div class="container">
    <h2>🔍 Cari Data Siswa</h2>
    
    <form action="" method="GET">
        <input type="text" name="cari" value="<?php echo htmlspecialchars($keyword); ?>" placeholder="Masukkan nama siswa..." required>
        <button type="submit">Cari</button>
    </form>

    <hr>

    <?php
    if (isset($_GET['cari'])) {
        $keyword = mysqli_real_escape_string($koneksi, $keyword);
        
        echo "<h3>Hasil pencarian untuk: '" . htmlspecialchars($keyword) . "'</h3>";
        
        $query = "SELECT * FROM tb_siswa WHERE nama LIKE '%$keyword%'";
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>No. Telp</th>
                  </tr>";
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nisn']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nis']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                echo "<td>" . htmlspecialchars($row['nama_kelas']) . "</td>";
                echo "<td>" . htmlspecialchars($row['no_telp']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color: red;'>Maaf, data siswa dengan nama tersebut tidak ditemukan.</p>";
        }
    }
    ?>
</div>

</body>
</html>