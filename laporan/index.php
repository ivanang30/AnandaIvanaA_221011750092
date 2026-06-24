<?php
require_once '../config/session.php';
require_once '../config/koneksi.php';

cekLogin();

$query = "
SELECT
    p.nisn,
    s.nama,
    COUNT(p.id_pembayaran) as total_bayar
FROM tb_pembayaran p
JOIN tb_siswa s ON p.nisn = s.nisn
WHERE p.status = 'Lunas'
GROUP BY p.nisn
";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Laporan Pembayaran SPP</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Total Pembayaran Lunas</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $no = 1;
        while($row = mysqli_fetch_assoc($result)) :
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nisn']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['total_bayar']; ?></td>
        </tr>

        <?php endwhile; ?>

        </tbody>
    </table>
</div>

</body>
</html>
