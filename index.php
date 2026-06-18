<?php

require_once __DIR__ . "/koneksi/database.php";
require_once __DIR__ . "/classes/pendaftaran_regular.php";
require_once __DIR__ . "/classes/pendaftaran_prestasi.php";
require_once __DIR__ . "/classes/pendaftaran_kedinasan.php";

// 1. Inisialisasi Database
$database = new Database();
$db = $database->getConnection();

// 2. Ambil data menggunakan metode query spesifik (Polimorfisme struktural)
$daftarReguler = PendaftaranReguler::getDaftarReguler($db);
$daftarPrestasi = PendaftaranPrestasi::getDaftarPrestasi($db);
$daftarKedinasan = PendaftaranKedinasan::getDaftarKedinasan($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen PMB</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center">Data Pendaftaran Mahasiswa Baru</h1>

        <?php 
        function renderTabel($judul, $data, $warna) { ?>
            <div class="bg-white p-6 rounded shadow-lg mb-8">
                <h2 class="text-xl font-bold mb-4 text-<?php echo $warna; ?>-700"><?php echo $judul; ?></h2>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="p-2 border">Nama</th>
                            <th class="p-2 border">Info Jalur</th>
                            <th class="p-2 border">Biaya Dasar</th>
                            <th class="p-2 border">Total Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $mhs): ?>
                        <tr class="border-b">
                            <td class="p-2"><?php echo $mhs->getNama(); ?></td>
                            <td class="p-2 italic text-sm"><?php echo $mhs->tampilkanInfoJalur(); ?></td>
                            <td class="p-2">Rp<?php echo number_format($mhs->getBiayaDasar(), 0, ',', '.'); ?></td>
                            <td class="p-2 font-bold text-green-600">Rp<?php echo number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>

        <?php renderTabel("Jalur Reguler", $daftarReguler, "blue"); ?>
        <?php renderTabel("Jalur Prestasi", $daftarPrestasi, "purple"); ?>
        <?php renderTabel("Jalur Kedinasan", $daftarKedinasan, "orange"); ?>
    </div>
</body>
</html>