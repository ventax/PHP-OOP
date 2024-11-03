<?php

class Hewan{
    public string $nama;
    public string $habitat;
    public string $warna;
    public int $tahun;
    
    public function __construct(
        $nama = "",
        $habitat = "",
        $warna = "",
        $tahun = 0
    ){
        $this->nama = $nama;
        $this->habitat = $habitat;
        $this->warna = $warna;
        $this->tahun = $tahun;
    }
}
