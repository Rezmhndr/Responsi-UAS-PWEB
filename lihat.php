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
        <h1>Daftar Pesanan</h1>
        <center>
          <?php
              $myfile =  fopen("data.txt","r") or die ("File Tidak Ditemukan!");
              $i = 1;
             while ($isi = fgets($myfile)){
              $pisah = explode ('|', $isi);
              echo("$i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$pisah[0]&nbsp;$pisah[1]&nbsp;$pisah[2]");
              echo ("<br>");
            }
          ?>
        </center>

      </div>
</body>
</html>