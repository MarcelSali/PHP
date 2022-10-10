<?php
    $nilai = [3,2,5,3,7];
    // $jumData = count($nilai);
    // $jumNilai = array_sum($nilai);
    // $rata_rata = $jumNilai/$jumData;

    // echo "Nilai Rata - Rata Dari [3,2,5,3,7] adalah : $rata_rata"
    $total = 0;
    foreach($nilai as $x){
        $total=$total+$x;
    }
    $rata2=$total/count($nilai);
    echo "rata - rata = $rata2";


?>