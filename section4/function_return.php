<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan ($nama, $salam="assalamualaikum"){
    echo $salam.",";
    echo "perkenalkan, nama saya ".$nama."<br/>;";

    //memanggil fungsi lain
    echo "saya berusia ". hitungUmur(1988, 2023) ." tahun<br/>";
    echo "senang berkenalan dengan anda<br/>";
}
// memanggil fungsi perkenalan
perkenalan("Elok");

?>
