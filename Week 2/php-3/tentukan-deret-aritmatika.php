<?php
function tentukan_deret_aritmatika($arr)
{
    $atas = 1;
    for($i=0;$i<count($arr);$i++){
        $keN = $atas + $i;
        $atas = $keN;
        echo $keN." ";
    }
}

// TEST CASES
//echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
//echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
//echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
//echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false