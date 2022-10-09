<!DOCTYPE html>
<html data-theme="light">

<head>
  <title>No 4</title>
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
      <h1 class="font-bold">Konversi Nilai Mahasiswa</h1>
    </div>
    <!-- Akhir judul -->

    <!-- Konten -->
    <div class="container p-5 mt-5">
      <form action="" method="post">
        <label for="idJumlah">Masukkan Banyak Nilai yang ingin dimasukkan : </label>
        <br>
        <input type="number" name="jumlah" id="idJumlah" placeholder="Type here" class="input input-bordered input-accent w-full max-w-xs mt-3">
        <button type="submit" name="submit" class="btn bg-teal-500 border-none">Submit</button>
      </form>
      <br>

      <?php if (isset($_POST['jumlah'])) :
        $jumlah = $_POST['jumlah']; ?>

        <form action="proses.php" method="post">
          <?php for ($i = 0; $i < $jumlah; $i++) : ?>
            <label for="idNilai">Masukkan Nilai ke <?= ($i + 1) ?> : </label>
            <br>
            <input type="number" name="nilai<?= $i ?>" id="idNilai" placeholder="Type here" class="input input-bordered input-accent w-full max-w-xs mt-3">
            <input type="hidden" name="jumlah2" value="<?= $jumlah ?>">
            <br><br>
            <?php if (($i + 1) == $jumlah) : ?>
              <button type="submit" name="submit" class="btn bg-teal-500 border-none">Submit</button>
            <?php endif ?>
          <?php endfor; ?>
        </form>
      <?php endif; ?>
    </div>
    <!-- Akhir Konten -->

    <!-- Pagination -->
    <div class="btn-group flex flex-wrap justify-between pt-8">
      <a class="btn btn-outline" href="../looping.html">&lt&lt Looping</a>
      <a class="btn btn-outline" href="../FileHandling.html">File Handling &gt&gt</a>
    </div>
    <!-- Akhir Pagination -->

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