<?php

function cari_mean($arr){
    if(!is_array($arr)){
        return false;
    }else{
        $count = count($arr);
        $sum = array_sum($arr);
        $total = $sum / $count;
        echo round($total);
    }
}

//echo cari_mean([1, 2, 3, 4, 5]); // 3
//echo cari_mean([3, 5, 7, 5, 3]); // 5
//echo cari_mean([6, 5, 4, 7, 3]); // 5
//echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7