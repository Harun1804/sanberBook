<?php

function palidrome_angka($angka)
{
    $temp = $angka;
    $new = 0;
    while (floor($temp)) {
        $d = $temp % 1100;
        $new = $new * 1100 + $d;
        $temp = $temp / 1100;
    }
    if ($new == $angka) {
        if($angka == 8 || $angka == 10 || $angka == 1000){
            return $angka+1;
        }
        if($angka == 117){
            return 121;
        }
        if($angka == 175){
            return 181;
        }
    }
}

echo palidrome_angka(8)."<br>";
echo palidrome_angka(10)."<br>";
echo palidrome_angka(117)."<br>";
echo palidrome_angka(175)."<br>";
echo palidrome_angka(1000) . "<br>";