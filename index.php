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
    <title>Responsi - 243</title>
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
      <h1>Laundry ? Disini Aja !</h1>
      <!-- <button type="button" class="btn btn-outline-warning">ISI FORM DISINI</button> -->
    </div>

    <!-- Form -->
    <div class="overlay-form">
      <div class="close-btn" onclick="toggleForm()">&times;</div>
      <div class="form-element">
        <form name="formulir" method="post" action="isi.php">
          <label for="namalengkap">Nama Lengkap</label>
          <input type="text" id="nama" name="nama">
        </div>
        <div class="form-element">
          <label for="notelp">Nomor Telepon</label>
          <input type="number" id="notelp" name="notelp">
        </div>
        <div class="form-element">
          <label for="paket">Pilihan Paket</label>
          <select name="paket" id="paket">
            <optgroup label="Laundry Kiloan">
              <option value="Self Service (5 Kg)">Self-Service (5 Kg)</option>
              <option value="Cuci Kering Lipat (3 Kg)">Cuci Kering Lipat (3 Kg)</option>
              <option value="Cuci Kering Lipat (5 Kg)">Cuci Kering Lipat (5 Kg)</option>
              <option value="Cuci Kering Setrika (5 Kg)">Cuci Kering Setrika (5 Kg)</option>
              <option value="Setrika">Setrika</option>
            </optgroup>
            <optgroup label="Laundry Satuan">
              <option value="Bed Cover">Bed Cover</option>
              <option value="Bed Cover (Jumbo)">Bed Cover (Jumbo)</option>
              <option value="Baju Muslim">Baju Muslim</option>
              <option value="Kemeja Batik">Kemeja Batik</option>
              <option value="Jas">Jas</option>
              <option value="Blouse">Blouse</option>
            </optgroup>
            <optgroup label="Cuci Sepatu">
              <option value="Sneaker">Sepatu Sneaker</option>
              <option value="Kanvas">Sepatu Kanvas</option>
              <option value="Suedee">Sepatu Suedee</option>
              <option value="Leather">Sepatu Leather</option>
              <option value="Hybrid">Sepatu Hybrid</option>
              <option value="SPA">Shoes & Bag SPA</option>
            </optgroup>
            <optgroup label="Cuci Karpet">
              <option value="Karpet Rumah">Karpet Rumah</option>
              <option value="Karpet Masjid">Karpet Masjid</option>
              <option value="Karpet Kantor Tanam">Karpet Kantor Tanam</option>
              <option value="Kasur Palembang">Kasur Palembang</option>
              <option value="Gorden Tebal">Gorden Tebal</option>
              <option value="Gorden Tipis">Gorden Tipis</option>
              <option value="Vitrage">Vitrage</option>
            </optgroup>
          </select>
          <div class="form-element">
            <button>Kirim</button>
          </div>
        </form>
      </div>
    </div>
    <div class="center">
      <button onclick="toggleForm()">ISI FORM DISINI</button>
    </div>
    <!-- End of Form -->

    <div class="fitur text-center" id="daftar">
      <h1>Daftar Laundry</h1>
      <div class="borderbawah"></div>
    </div>

    <!-- Card Deck -->
    <div class="card-deck mx-md-5">
      <div class="card">
        <img class="card-img-top" src="https://www.mataharilaundry.com/wp-content/uploads/2016/10/laundry-kiloan-902-s_kilo.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><strong>Laundry Kiloan</strong></h5>
          <p class="card-text">Punya cucian menumpuk yang bisa diukur berdasarkan beratnya seperti barang bekas ? Laundry kiloan merupakan solusi dari kami, yang mana harga laundry akan ditentukan berdasarkan kiloannya !!</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><strong>Laundry Kiloan</strong>></small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://www.mataharilaundry.com/wp-content/uploads/2016/10/laundry-satuan-372-s_clothes.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><strong>Laundry Satuan</strong></h5>
          <p class="card-text">Ingin laundry tapi hanya satuan seperti kemeja dan jas yang penting dan mahal ? Laundry satuan lah solusinya ! Dicuci secara khusus yaitu tidak disatukan dengan cucian lain dan dicuci oleh profesional, dijamin jas dan kemeja yang dicuci akan terlihat seperti baru !</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><strong>Laundry Satuan</strong></small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://www.mataharilaundry.com/wp-content/uploads/2016/10/icon-laundry-sepatu.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><strong>Laundry Sepatu</strong></h5>
          <p class="card-text">Selain laundry pakaian, kami juga menyediakan laundry khusus sepatu. Dicuci dengan sabun khusus sesuai dengan bahan sepatu yang ingin dicuci. Dijamin bersih seperti display di ZALORA !</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><strong>Laundry Sepatu</strong></small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="	https://www.mataharilaundry.com/wp-content/uploads/2016/10/laundry-karpet-819-s_carpet-2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><strong>Cuci Karpet</strong></h5>
          <p class="card-text">Selain pakaian dan sepatu, kami juga menyediakan jasa cuci karpet seperti karpet rumah, karpet masjid dan karpet kantoran.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><strong>Cuci Karpet</strong></small>
        </div>
      </div>
      <!-- <div class="card">
        <img class="card-img-top" src="https://www.mataharilaundry.com/wp-content/uploads/2016/10/laundry-sofa-532-s_sofa.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><strong>Cuci Sofa & Spring Bed</strong></h5>
          <p class="card-text">Selain yang disebutkan diatas, tidak lengkap jika kami tidak menyediakan jasa mencuci sofa dan juga spring bed. Karena spring bed biasanya berukuran besar, maka kami memisahkannya dengan pakaian lainnya.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><strong>Cuci Sofa & Spring Bed</strong></small>
        </div>
      </div> -->
    </div>
    <!-- End Card Deck -->

    <script src="fungsi.js"></script>

</body>
</html>