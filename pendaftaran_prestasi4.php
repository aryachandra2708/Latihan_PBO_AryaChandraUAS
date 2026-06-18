<?php
require_once "Pendaftaran.php";

class PendaftaranPrestasi extends Pendaftaran {
    private $jenis_prestasi;
    private $tingkat_prestasi;

    public function __construct($id, $nama, $asal, $nilai, $biaya, $jenis, $tingkat) {
        parent::__construct($id, $nama, $asal, $nilai, $biaya);
        $this->jenis_prestasi = $jenis;
        $this->tingkat_prestasi = $tingkat;
    }

    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function hitungTotalBiaya() { return $this->biaya_pendaftaran_dasar - 50000; }
    public function tampilkanInfoJalur() { return "Prestasi: $this->jenis_prestasi ($this->tingkat_prestasi)"; }
}