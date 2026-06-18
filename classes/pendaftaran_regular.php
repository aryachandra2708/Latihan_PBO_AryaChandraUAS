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

    // Polimorfisme Overriding (Tahap 5)
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar;
    }

    public function tampilkanInfoJalur() {
        return "Prodi: " . $this->pilihan_prodi . " (" . $this->lokasi_kampus . ")";
    }

    // Query Spesifik (Tahap 4)
    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new self($row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['pilihan_prodi'], $row['lokasi_kampus']);
        }
        return $result;
    }
}