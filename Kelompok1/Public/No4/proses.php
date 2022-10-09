<?php
    function hurufMutu($nilai){
        if ($nilai >= 80 && $nilai < 100) {
            $hurufMutu = 'A';    
        }else if ($nilai >= 75 && $nilai < 80) {
            $hurufMutu = 'B+';    
        }else if ($nilai >= 69 && $nilai < 75) {
            $hurufMutu = 'B';    
        }else if ($nilai >= 60 && $nilai < 69) {
            $hurufMutu = 'C+';    
        }else if ($nilai >= 55 && $nilai < 60) {
            $hurufMutu = 'C';    
        }else if ($nilai >= 50 && $nilai < 55) {
            $hurufMutu = 'D+';    
        }else if ($nilai >= 44 && $nilai < 50) {
            $hurufMutu = 'D';    
        }else {
            $hurufMutu = 'E';    
        }

        return $hurufMutu;
    }

    function angkaMutu($hurufMutu){
        switch ($hurufMutu) {
            case 'A':
                $angkaMutu = ">=3.75";
                break;
            case 'B+':
                $angkaMutu = "3.25 - 3.74";
                break;
            case 'B':
                $angkaMutu = "2.75 - 3.24";
                break;
            case 'C+':
                $angkaMutu = "2.25 - 2.74";
                break;
            case 'C':
                $angkaMutu = "1.75 - 2.24";
                break;
            case 'D+':
                $angkaMutu = "1.25 - 1.74";
                break;
            case 'D':
                $angkaMutu = "0.75 - 1.24";
                break;
            case 'E':
                $angkaMutu = "<0.75";
                break;      
        }

        return $angkaMutu;
    }

    // akhir func

    if (isset($_POST['jumlah2'])){ 
        $jumlah = $_POST['jumlah2']; 
        
        for ($i = 0; $i < $jumlah; $i++) {
            if (isset($_POST["nilai$i"])) {
                $arrNilai[] = $_POST["nilai$i"];
            }
        }
    }

?>

<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Hasil No 4</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Awal Navbar -->
    <div class="container mx-auto shadow-md bg-teal fixed top-0 z-50">
      <div class="navbar bg-teal-500">
        <div class="flex-1">
          <a href="../../index.html" class="btn btn-ghost normal-case text-xl active:bg-slate-300 text-slate-100">Kelompok 1</a>
        </div>
        <div class="flex-none">
          <ul class="menu menu-horizontal p-0">
            <li>
              <a href="../../index.html" class="text-slate-100 font-medium active:bg-teal-500">Home</a>
            </li>
            <li tabindex="0">
              <a class="text-slate-100 font-medium active:bg-teal-500">
                Soal
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                  <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                </svg>
              </a>
              <ul class="p-2 bg-base-100">
                <li>
                  <a href="../resume-client-server.html" class="active:bg-teal-500">Client Server</a>
                </li>
                <li>
                  <a href="../resume-14-22-26.html" class="active:bg-teal-500">PHP Basics</a>
                </li>
                <li><a href="../array.html" class="active:bg-teal-500">Array, Flow Control, <br />Looping</a></li>
                <li><a href="no4.php" class="active:bg-teal-500">Nilai Mahasiswa</a></li>
                <li><a href="../FileHandling.html" class="active:bg-teal-500">Login, AJAX Chat, <br />File Handling</a></li>
              </ul>
            </li>
            <li>
              <a href="../../index.html#ourTeam" class="text-slate-100 font-medium active:bg-teal-500">Our Team</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Akhir Navbar -->

    <div class="container p-10 mt-10 min-h-screen">
        <!-- Judul -->
        <div class="container text-center p-8 text-2xl border-slate-600 border-b-4 text-black border-teal-500">
            <h1 class="font-bold">Hasil Konversi Nilai Mahasiswa</h1>
        </div>
        <!-- Akhir judul -->

        <!-- Isi Konten -->
        <div class="container p-5 mt-5">
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Huruf Mutu</th>
                            <th>Angka Mutu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <?php for ($i=0; $i < $_POST['jumlah2']; $i++) : ?>
                            <?php if ($i%2 == 0) { ?>
                                <tr class="active">
                            <?php } else{?>
                                <tr>
                            <?php } ?>
                            
                                <th><?=($i+1)?></th>
                                <td>Nilai ke-<?=($i+1)?></td>
                                <td><?= $_POST["nilai$i"]?></td>
                                <td><?= hurufMutu($arrNilai[$i])?></td>
                                <td><?= angkaMutu(hurufMutu($arrNilai[$i]))?></td>

                            </tr>
                        <?php endfor; ?>

                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="btn-group flex flex-wrap justify-between pt-8 bg">
                <a class="btn btn-outline" href="no4.php">&lt&lt Back</a>
                <a class="btn btn-outline" href="../FileHandling.html">Next &gt&gt</a>
            </div>
            <!-- Akhir Pagination -->

        </div>
        <!-- Akhir Isi Konten -->
        
    </div>

    <!-- Footer -->
    <footer class="footer footer-center p-4 bg-slate-600 text-base-content">
      <div>
        <p class="text-slate-100 font-medium tracking-wider">
          Copyright © 2022 - Kelompok 1 PAW
        </p>
      </div>
    </footer>
    <!-- Akhir Footer -->

</body>
</html>