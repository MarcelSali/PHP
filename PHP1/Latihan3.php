<?php
    $ipk = 3.25;

    if($ipk < 2.76){
        echo "IPK Anda : $ipk<br>";
        echo "Predikat Anda : Tidak Mendapat Predikat";
    }
    elseif($ipk >= 2.76 && $ipk <= 3.00){
        echo "IPK Anda : $ipk<br>";
        echo "Predikat Anda : Memuaskan";
    }
    elseif($ipk > 3.00 && $ipk <= 3.50){
        echo "IPK Anda : $ipk<br>";    
        echo "Predikat Anda : Sangat Memuaskan";
    }
    else{
        echo "IPK Anda : $ipk<br>";
        echo "Predikat Anda : Dengan Pujian";
    }    
    
?>