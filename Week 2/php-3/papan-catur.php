<?php
function papan_catur($angka){
    $text = '';
    $jumlah = $angka;
    $text .= '<table border=1>';
    for($n = 0;$n<$jumlah;$n++){
        $text .= '<tr>';
        for($m=0;$m<$jumlah;$m++){
            $warna = '';
            if (($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)) {
                $warna = '#000';
            } else { 
                $warna = '#fff';
            }
            $text .= '<td width=30 height=30 bgcolor=' . $warna . '></td>';
        }
        $text .= '</tr>';
    }
    $text .= '</table>';
    echo $text;
}

echo papan_catur(4)."<br>";
echo papan_catur(8)."<br>";
echo papan_catur(5)."<br>";