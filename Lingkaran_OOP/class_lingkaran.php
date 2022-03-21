<?php

class lingkaran {

    public $jari_jari;
    const PHI = 3.14;
    function __construct ($jari_jari) {
        $this->jari2 =$jari_jari;
    }

    public function getLuas() {
        return self::PHI * $this->jari2 * $this->jari2;
    }

    public function getKeliling() {
        return 2 * self::PHI *$this->jari2;
    }

}

?>