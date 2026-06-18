<?php
class PendaftaranPrestasi extends Pendaftaran {

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar - 50000;
    }
}