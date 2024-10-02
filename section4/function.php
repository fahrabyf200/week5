<?php
function perkenalan($nama, $salam="assalamualaikum"){
    echo $salam.",";
    echo "perkenalkan, nama saya ".$nama."<br/>";
    echo "senang berkenalan dengan anda<br/>";

}
// memanggil fungsi yang sudah di buat
perkenalan("hamdana", "Halo");

echo "<hr>";

$saya = "elok";
$ucapanSalam = "selamat pagi";

//
perkenalan($saya);



?>