<?php
function ubah_huruf($string)
{
    $convertion = ['a'=>'b', 'b' => 'c', 'c' => 'd', 'd' => 'e', 'e' => 'f', 'f' => 'g', 'g' => 'h', 'h' => 'i','i' => 'j','j' => 'k','k' => 'l','l' => 'm', 'm' => 'n', 'n' => 'o','o' => 'p', 'p' => 'q','q' => 'r', 'r' => 's', 's' => 't','t' => 'u','u' => 'v', 'v' => 'w', 'w' => 'x', 'x' => 'y', 'y' => 'z', 'z' => 'a'];
    $data = str_split($string);
    $new_data = '';
    foreach($data as $value){
        $new_data .= $convertion[$value]."";
    }
    return $new_data;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
//echo ubah_huruf('developer'); // efwfmpqfs
//echo ubah_huruf('laravel'); // mbsbwfm
//echo ubah_huruf('keren'); // lfsfo
//echo ubah_huruf('semangat'); // tfnbohbu