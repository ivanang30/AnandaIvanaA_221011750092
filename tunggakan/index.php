<?php
require_once '../config/session.php';
require_once '../config/koneksi.php';

cekLogin();

$query = "
SELECT
    s.nisn,
    s.nama,
    s.nama_kelas,
    COUNT(p.id_pembayaran) AS jumlah_tunggakan
FROM tb_siswa s
JOIN tb_pembayaran p ON s.nisn = p.nisn
WHERE p.status = 'Belum Lunas'
GROUP BY s.nisn, s.nama, s.nama_kelas
ORDER BY jumlah_tunggakan DESC
";

$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Tunggakan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Data Tunggakan Siswa</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jumlah Tunggakan</th>
            </tr>
        </thead>

        <tbody>

        <?php while($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $row['nisn']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nama_kelas']; ?></td>
                <td>
                    <span class="badge bg-danger">
                        <?= $row['jumlah_tunggakan']; ?> Bulan
                    </span>
                </td>
            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>

</div>

</body>
</html>
