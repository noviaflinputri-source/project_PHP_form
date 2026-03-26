<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $hp;
    public $alamat;

    public function __construct($nama, $nim, $hp, $alamat) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->hp = $hp;
        $this->alamat = $alamat;
    }

    public function tampilkanData() {
        return "
        Nama: $this->nama <br>
        NIM: $this->nim <br>
        No HP: $this->hp <br>
        Alamat: $this->alamat
        ";
    }
}