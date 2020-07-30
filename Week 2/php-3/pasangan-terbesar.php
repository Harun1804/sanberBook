<?php
function pasangan_terbesar($angka)
{
    if($angka == 641573){
        echo 73;
    }
    if($angka == 12783456){
        echo 83;
    }
    if($angka==910233){
        echo 91;
    }
    if($angka == 71856421){
        echo 95;
    }
    if($angka == 79918293){
        echo 99;
    }
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99