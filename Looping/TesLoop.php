<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Penerapan Looping</title>
</head>

<body class="place-content-center px-11 py-11">
    <form action="" method="POST">
        <label class="text-lg text-white" for="nilai">Jumlah Ayam : </label><br />
        <input class="rounded-md" type="text" name="jum" required />
        <button class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium shadow-xl ml-5"
            type="submit">Submit</button>
    </form>
    <?php
    $jum = $_POST['jum'];
    echo "Anak ayam turun $jum<br>";
    $b = $jum;
    for ($a=1; $a<=$b; $a++){
        echo "Anak ayam turun $jum,";
        $jum = $jum-1;
        if($jum!=0){
          echo " mati satu tinggal $jum<br>";
        } else{
            echo " mati satu tinggal induknya<br>";
          }  

    }
?>
    <br />
    <button class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium shadow-xl"><a
            href="../loop.html">Kembali</a></button>
</body>

</html>