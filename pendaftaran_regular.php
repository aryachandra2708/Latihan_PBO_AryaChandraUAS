<?php
class PendaftaranRegular extends Pendaftaran {

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar * 1.25;
    }
}