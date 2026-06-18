<?php
class PendaftaranReguler extends Pendaftaran {
    
    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar;
    }
}
?>