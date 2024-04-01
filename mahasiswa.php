<?php

class Mahasiswa {
    private $nama;
    private $nilai;

    public Function __construct($nama, $nilai){
        $this->nama = $nama;
        $this->nilai = $nilai;

    }

    public Function getNama(){
        return $this->nama;
    }

    public Function getNilai(){
        return $this->nilai;
    }

    public Function hasilLulus(){
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    public Function predikat(){
        if ($this->nilai >= 95) {
            return 'A';
        } elseif ($this->nilai >= 80) {
            return 'B';
        } elseif ($this->nilai >= 85) {
            return 'C';
        } else {
            return 'D';
        }
    }
}