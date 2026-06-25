<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 900px;
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 5px;
        }
        .identitas {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #0056b3;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .status-lunas {
            color: white;
            background-color: #28a745;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
        }
        .status-pending {
            color: #333;
            background-color: #ffc107;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Laporan Pembayaran Uang Kuliah</h2>
    <div class="identitas">
        <p><strong>Disusun oleh:</strong> Patahuddin | <strong>NIM:</strong> 221011750137</p>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Bayar</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jumlah (Rp)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>25 Jun 2026</td>
                <td>221011750137</td>
                <td>Patahuddin</td>
                <td>1.500.000</td>
                <td><span class="status-lunas">Lunas</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>24 Jun 2026</td>
                <td>221011750092</td>
                <td>Ananda Ivana A</td>
                <td>1.500.000</td>
                <td><span class="status-lunas">Lunas</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>22 Jun 2026</td>
                <td>221011750199</td>
                <td>Budi Santoso</td>
                <td>1.500.000</td>
                <td><span class="status-pending">Menunda</span></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>