<?php
require_once "class_dispenser.php";

$awal = new Dispenser("tidak ada", 1, 1);
echo "Volume awal galon = ".$awal->isi_awal() ." ml";
echo "<br/>Volume gelas = ".$awal->volume_gelas() ." ml";
echo "<br/>Harga pergelas = ".$awal->format_uang($awal->harga_segelas());

$pembeli1 = new Dispenser("Rika",1, 2);
 echo "<br/><br/>".$pembeli1->nama." membeli ".$pembeli1->jumlahBeli." ".$pembeli1->namaMinuman();
 echo "<br/> Sisa volume pada galon ".$pembeli1->namaMinuman()." sekarang adalah ".$pembeli1->berkurang()." ml";
 echo "<br/>Total Pembayarannya : ".$pembeli1->format_uang($pembeli1->bayar());
 echo "<br/>Total Penghasilan Galon : ".$pembeli1->format_uang($pembeli1->penghasilan()); 

 $pembeli2 = new Dispenser("Lena",1, 2);
 echo "<br/><br/>".$pembeli2->nama." membeli ".$pembeli2->jumlahBeli." ".$pembeli2->namaMinuman();
 echo "<br/> Sisa volume pada galon ".$pembeli2->namaMinuman()." sekarang adalah ".$pembeli2->berkurang()." ml";
 echo "<br/>Total Pembayarannya : ".$pembeli2->format_uang($pembeli2->bayar());
 echo "<br/>Total Penghasilan Galon : ".$pembeli2->format_uang($pembeli2->penghasilan()); 

 $pembeli3 = new Dispenser("Justin",2, 1);
 echo "<br/><br/>".$pembeli3->nama." membeli ".$pembeli3->jumlahBeli." ".$pembeli3->namaMinuman();
 echo "<br/> Sisa volume pada galon ".$pembeli3->namaMinuman()." sekarang adalah ".$pembeli3->berkurang()." ml";
 echo "<br/>Total Pembayarannya : ".$pembeli3->format_uang($pembeli3->bayar());
 echo "<br/>Total Penghasilan Galon : ".$pembeli3->format_uang($pembeli3->penghasilan());


?> 