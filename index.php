<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;500;600;700;800&display=swap" rel="stylesheet">


    <title>Tugas Formulir</title>
  </head>
  <body style="background-color: #1a202c; font-family: 'Poppins', sans-serif;">

  <section class="d-flex align-items-center" style="min-height: 100vh;">
        <div class="container mt-4">
            <div class="row" style="margin: 50px 0;">
                <div class="col-sm-6 offset-sm-3">
                <main id="kanan" class="text-light">
                <h3 class="font-weight-bold text-center" style="color: #e9eaeb; font-weight: 700;">Formulir Segitiga Sama Sisi</h3>
                <p>
                    <p>Segitiga Sama Sisi</p>
                    
                    <form name="pp" action="index.php" method="POST">

                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping">Nama</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama..." aria-label="Username" aria-describedby="addon-wrapping"  style="color:#e9eaeb;   
                            background-color: #011627;">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text">Sisi Kanan Kiri</span>
                            <input class="form-control" type="number" name="sisi" min="1" max="10"
                            style="color:#e9eaeb;   
                            background-color: #011627;"> 
                        </div>
                        
                        <div class="input-group mb-3">
                        <span class="input-group-text">Alas</span>
                            <input class="form-control" type="number" name="alas" min="1" max="10"
                            style="color:#e9eaeb;   
                            background-color: #011627;"> 
                        </div>

                        <div class="input-group mb-4">
                        <span class="input-group-text">Tinggi</span>
                                <input class="form-control" type="number" name="tinggi" min="1" 
                                style="color:#e9eaeb;   
                                background-color: #011627;">
                        </div>
     
                                <span>Warna</span>
                                <input class="form-control" type="color" name="col" style="width:50px;">
                        

                                <br>Tgl lhr :
                                <div class="d-flex justify-content-between"> 
                                    <input type="date" name="tgl" style="border-radius:5px;">
                                    <input type="submit" value="kirim server" class="button positive" style="border-radius:5px;"> 
                                </div>
                        </form>
                    <br>
                    <button type="button" class="btn button positive w-100" onclick="hitung()"
                    style="color:#e9eaeb;   
                        background-color: #011627;
                        border-color: #81e6d9;">
                    Hitung <i class="fas fa-calculator" style="color:#81e6d9;"></i></button>
                </p>
                <hr style="    
                        margin-top: 1rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid #e9eaebz">
            <br> Javascript:
            <pre id="hsl" style="border: 1px dashed; border-color:#81e6d9; padding-left: 10px;"></pre>
            <br> PHP:
            <pre style="border: 1px dashed; border-color:#81e6d9; padding-left: 10px;">
            <?php
               $judul = "Kelas MI 2020";
               $nama=$_POST['nama'];
               $sisi=$_POST['sisi'];
               $alas= $_POST['alas'];
               $tinggi= $_POST['tinggi'];
               $kell=  $sisi + $sisi + $alas;
               $luas = 1/2 * $alas * $tinggi;
                if ($sisi and $alas and $tinggi and $nama) {
                    echo $judul."<br>";
                    echo "<br> Halo, $nama";
                    echo "<br>Keliling Segitiga = $sisi + $sisi + $alas = ".$kell;
                    echo "<br>Luas Segitiga = 1/2 * $alas * $tinggi = ".$luas;     
                    echo "<br>Warna = ".$_POST['col'];
                    echo "<br>Tanggal = ".$_POST['tgl'];
                    echo "<hr>";
                } else echo "belum ada input<br>";
               echo date('Y-m-d H:i:s')." - ".date_default_timezone_get();
            ?>
            </pre>
        </main>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Interaksi dengan file hitung.js -->
    <script src="script/hitung.js"></script>
  </body>
</html>
