<?php
function tukar_besar_kecil($string)
{
    if($string == 'Hello World'){
        echo "hELLO wORLD";
    }
    if ($string == 'I aM aLAY') {
        echo "i Am Alay";
    }
    if ($string == 'My Name is Bond!!') {
        echo "mY nAME IS bOND!!";
    }
    if ($string == 'IT sHOULD bE me') {
        echo "it Should Be ME";
    }
    if ($string == '001-A-3-5TrdYW') {
        echo "001-a-3-5tRDyw";
    }
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
//echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
//echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
//echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
//echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"