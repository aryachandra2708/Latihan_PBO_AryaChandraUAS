<?php
require_once "Pendaftaran.php";

class PendaftaranReguler extends Pendaftaran {
    private $pilihan_prodi;
    private $lokasi_kampus;

    public function __construct($id, $nama, $asal, $nilai, $biaya, $prodi, $kampus) {
        parent::__construct($id, $nama, $asal, $nilai, $biaya);
        $this->pilihan_prodi = $prodi;
        $this->lokasi_kampus = $kampus;
    }

    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Implementasi metode abstrak wajib
    public function hitungTotalBiaya() { return $this->biaya_pendaftaran_dasar; }
    public function tampilkanInfoJalur() { return "Prodi: $this->pilihan_prodi di $this->lokasi_kampus"; }
}