<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.27.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP Basics Slide 58-59</title>
  <title>Konversi nilai mahasiswa</title>
</head>

<body>
  <div class="m-5">
    <h1>Konversi nilai mahasiswa</h1>
    <br>
    <form action="Konversi Nilai.php" method="POST">
      Jumlah data:
      <input type="number" name="jumlah" min="0" max="100" required><br>
      <br>
      <button class="bg-green-800 btn btn-primary">
        <input type="submit" value="Konversi nilai">
      </button>
    </form>

  <div class="card-actions justify-end mx-5">
    <button class="bg-violet-900 btn btn-primary"><a href="landing-page.html">Back</a></button>
  </div>

<?php

  if (!empty($_POST['jumlah'])) {
    $jumlah = $_POST['jumlah'];
    echo "<h1>Konversi Nilai</h1><br>";
    //melakukan looping
    for ($i = 1;$i <= $jumlah;$i++) { 
        echo '<form method="post">
        Nilai ke-'.($i).':
        <input type="number" name="'."nilai$i".'"
        min="0" max="100" required><br>
        <br>';
    }
    echo
    '<button class="bg-green-800 btn btn-primary">
    <input type="submit" value="Konversi"></form>
    </button>';
  
  } else {
      //looping konversi data
      echo "<h1>Hasil Konversi</h1><br>";
      foreach($_POST as $nilai):
        $mutu = "Konversi nilai $nilai ke huruf adalah ";

        if ($nilai >= 80):
          $mutu .= "A";
        elseif ($nilai > 75):
          $mutu .= "B+";
        elseif ($nilai > 69):
          $mutu .= "B";
        elseif ($nilai > 60):
          $mutu .= "C+";
        elseif ($nilai > 55):
          $mutu .= "C";
        elseif ($nilai > 50):
          $mutu .= "D+";
        elseif ($nilai > 44):
          $mutu .= "D";
        elseif ($nilai > 0):
          $mutu .= "E";
        endif;
        
        echo "<p>$mutu</p>";
      endforeach;
    }
  ?>