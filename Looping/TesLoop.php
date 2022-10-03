<?php
    $jum=$_POST['jum'];
    echo"Anak ayam turun $jum<br>";
    $b=$jum;
    for ($a=1;$a<=$b;$a++)
    {

        echo"Anak ayam turun $jum,";
        $jum=$jum-1;
        if($jum!=0)
        echo"mati satu tinggal $jum<br>";
        else
        echo"mati satu tinggal induknya<br>";

    }
?>