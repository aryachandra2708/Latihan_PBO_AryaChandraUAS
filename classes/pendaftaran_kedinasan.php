<?php
require_once __DIR__ . "/Pendaftaran.php";

class PendaftaranKedinasan extends Pendaftaran {
    private $sk_ikatan_dinas;
    private $instansi_sponsor;

    public function __construct($id, $nama, $asal, $nilai, $biaya, $sk, $sponsor) {
        parent::__construct($id, $nama, $asal, $nilai, $biaya);
        $this->sk_ikatan_dinas = $sk;
        $this->instansi_sponsor = $sponsor;
    }

    // Tahap 5: Overriding
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "Sponsor: " . $this->instansi_sponsor . " (SK: " . $this->sk_ikatan_dinas . ")";
    }

    // Tahap 4: Metode ini yang kamu butuhkan (tambahkan ini ke dalam class!)
    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = new self($row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'], $row['sk_ikatan_dinas'], $row['instansi_sponsor']);
        }
        return $result;
    }
}