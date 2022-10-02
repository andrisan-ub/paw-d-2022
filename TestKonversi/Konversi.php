<?php
    //mengecek jumlah data
    if (!empty($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];
        echo "<h1>Hasil Konversi</h1>";
        //melakukan looping
        for ($i = 1;$i <= $jumlah;$i++) { 
            echo '<form method="post">
            Nilai ke-'.($i).':
            <input type="number" name="'."nilai$i".'"
            min="0" max="100" required><br>';
        }
        echo '<input type="submit" value="Konversi"></form>';
    }else{
        //mulai looping    
        foreach ($_POST as $value) {
            $print = "Nilai $value dikonversikan menjadi: ";
            switch ($value) {
                case $value> 80 && $value <= 100:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (A)<br>";
                    break;              
                case $value > 75:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (B+)<br>";
                    break;
                case $value > 69:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (B)<br>";
                    break;
                case $value > 60:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (C+)<br>";
                    break;
                case $value > 55:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (C)<br>";
                    break;
                case $value > 50:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (D+)<br>";    
                    break;
                case $value > 44:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (D)<br>";    
                    break;
                case $value > 0:
                    $angka_mutu = $value / 25;
                    $print .= "$angka_mutu (E)<br>"; 
                    break;
                default:
                    echo "Maaf, input Anda salah.";
                    break;
            }
            echo "$print";
        }
    }
    echo '
        <button><a href="TestKonversi.html">
        Kembali</a></button>';   
?>