<?php 

 class Dispenser{
    protected static $galon1 = 2000;
    protected static $galon2 = 2000;
    protected static $hargaSegelas = 2500;
    private static $volumeGelas = 250;
    private static $penghasilan = 0;
    public $jumlahBeli;
    public $nomorMinuman;
    public $nama;
    
    public function __construct($nama, $nomorMinuman, $jumlahBeli){
        $this->nomorMinuman = $nomorMinuman;
        $this->jumlahBeli = $jumlahBeli;
        $this->nama =$nama;
    }


    public function namaMinuman(){
        if ($this->nomorMinuman == 1){
            return "Teh";
        }elseif ($this->nomorMinuman == 2) {
            return "Kopi";
        }else{
            return "*Minuman tidak tersedia";
        }
    } 

    public function isi_awal(){
        return self::$galon1;
    }

    public function harga_segelas(){
        return self::$hargaSegelas;
    }

    public function volume_gelas(){
        return self::$volumeGelas;
    }

    public function berkurang(){
        if ($this->nomorMinuman == 1){
            if (self::$galon1 != 0){
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $galon1 = self::$galon1 -= $total;
                return $galon1;
            }elseif (self::$galon1 == 0) {
                self::$galon1 = 2000;
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $galon1 = self::$galon1 -= $total;
                return $galon1;
            }
            
        }elseif ($this->nomorMinuman == 2){
            if (self::$galon2 != 0){
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $galon2 = self::$galon2 -= $total;
                return $galon2;
            }elseif (self::$galon2 == 0) {
                self::$galon2 = 2000;
                $total = $this->jumlahBeli * self::$volumeGelas; 
                $galon2 = self::$galon2 -= $total;
                return $galon2;
            }
            
        }
    }

    public function bayar(){
        return $this->jumlahBeli * self::$hargaSegelas; 
    }

    public function penghasilan(){
        $total = $this->jumlahBeli * self::$hargaSegelas;
        $tabungan = self::$penghasilan += $total;
        return $tabungan;
    }

    function format_uang($uang){
        $hasil = "Rp.".number_format($uang,0,",",".");
        return $hasil;
    }

 }

?>