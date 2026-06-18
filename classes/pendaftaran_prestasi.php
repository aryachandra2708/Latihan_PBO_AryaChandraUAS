<?php
require_once __DIR__ . "/Pendaftaran.php";

class PendaftaranPrestasi extends Pendaftaran {
    private $jenis_prestasi;
    private $tingkat_prestasi;

    public function __construct($id, $nama, $asal, $nilai, $biaya, $jenis, $tingkat) {
        parent::__construct($id, $nama, $asal, $nilai, $biaya);
        $this->jenis_prestasi = $jenis;
        $this->tingkat_prestasi = $tingkat;
    }

    // Polimorfisme Overriding (Tahap 5)
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Prestasi: " . $this->jenis_prestasi . " (Tingkat " . $this->tingkat_prestasi . ")";
    }

    // Query Spesifik (Tahap 4)
    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new self($row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['jenis_prestasi'], $row['tingkat_prestasi']);
        }
        return $result;
    }
}