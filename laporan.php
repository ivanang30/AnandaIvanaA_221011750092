<?php
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran SPP</title>
</head>
<body>

<h2>Laporan Pembayaran SPP</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Tanggal Bayar</th>
        <th>Jumlah Bayar</th>
    </tr>

<?php
$no = 1;
$query = mysqli_query($koneksi,"
SELECT p.*, s.nama
FROM pembayaran p
JOIN siswa s ON p.nisn=s.nisn
");

while($data = mysqli_fetch_array($query)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $data['nisn']; ?></td>
    <td><?= $data['nama']; ?></td>
    <td><?= $data['tgl_bayar']; ?></td>
    <td>Rp <?= number_format($data['jumlah_bayar']); ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
