<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pemilik</title>
</head>
<body>
    <!-- Navbar -->
    <div class="nav">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-family: 'Cinzel Decorative', cursive;" href="#">Lucky Laundry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                <a class="nav-link" href="#daftar">Layanan Laundry</a>
                <a class="nav-link" href="./daftar.php">Daftar Harga</a>
                <a class="nav-link" href="./lihat.php">Data Pesanan</a>

              </div>
            </div>
        </div>
      </nav>
    </div>
    <!-- End of Navbar -->

    <div class="dashboard text-center">
        <h1>Form Berhasil Dikirim, Kembali Ke Dashboard ?</h1>
        <a href="./index.php"><button>Kembali</button></a>
    </div>
<?php
        echo "<head><tittle>Data Pemesan</tittle></head>";
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $paket = $_POST['paket'];

        $myfile = fopen("data.txt", "a+");
        fputs($myfile, "$nama|$notelp|$paket\n");
        fclose($myfile);

        exit;
    ?>