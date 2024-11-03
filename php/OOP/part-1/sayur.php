 <?php
 
 class Sayur{
    public String $nama;
    public String $warna;
    public String $habitat;
    public Int $harga;
    public function __construct(
        $nama = '',
        $warna = '',
        $habitat = '',
        $harga = 0
    ){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->habitat = $habitat;
        $this->harga = $harga;
    }
}
?>
 