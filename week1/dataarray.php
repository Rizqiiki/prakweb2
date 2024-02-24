<?php
    $ar_buah = ["pepaya", "mangga","pisang","jambu" ];
    echo $ar_buah [2];
    echo '<br/> jumlah buah ' .count($ar_buah);
    echo '<ol>';
    foreach($ar_buah as $buah) {
        echo '<li>'. $buah .'</li>';
    }
    echo'</ol>';
    $ar_buah[]="durian";
    unset( $ar_buah[1]);
    $ar_buah[]= "manggis";
    echo '<ul>';
    foreach($ar_buah as $buah) {
        echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
    } 
    echo '</ul>';
?>