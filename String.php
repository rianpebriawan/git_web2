<?php
    //materi strlen / mengetahui panjang String
    $jargon = "Tetap Santai dan Berkualitas";
    echo strlen($jargon);

    //materi strcmp / membandingkan 2 string
    $kalimat1 = "belajar php";
    $kalimat2 = "belajar php";

    $output = strcmp($kalimat1, $kalimat2 );

    if($output !== 0){
        echo "<br/> Kalimat Tidak Sama";

    }else{
        echo "<br/> kalimat sama";
    }

    //materi strtoupper / huruf besar 
    $statment = "<br/> ini bukan maarah , ini cuma CPS";
    echo strtoupper(($statment));

    //materi strtoper / huruf kecil
    $statment2 = "<br/>INI BUKAN MARAH, INI CUMA CAPS";
    echo strtolower($statment2);

    //materi str_replace / mengganti kata
    $original = "saya belajar php";
    $sechar = "php";
    $replace = "Pemograman Web";

    $output2 = "str_replace"($sechar,  $replace, $original);
    echo "<br><br>".$output2;
?>