<?php
function tampilanAngka (int $jumlah, int $indeks = 1){
    echo "perulangan ke-{$indeks}<br>";

    //panggil diri sendiri selama $indeks <= $jumlah 
    if ($indeks < $jumlah){
        tampilanAngka($jumlah, $indeks + 1);

    }
}
tampilanAngka(20);
?>
