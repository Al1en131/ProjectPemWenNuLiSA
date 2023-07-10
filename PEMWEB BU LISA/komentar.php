<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <!--Form-->
    <div class="container">

        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Profil Saya</h2>
                    <p>Nama  :  Alif Essa Nurcahyani<br>
                    Tempat, tanggal lahir : Kota Baru, 31 Juli 2003<br>
                Jenis Kelamin  :  Perempuan<br>
            Alamat  :  Jl. Laguna Mandiri, Rantau Jaya, Sungai Durian, Kota Baru, Kalsel<br>
            No.Telp  :  085172041077<br>
            Agama  :  Islam<br>
            Kewarganegaraan  :  Indonesia<br>
            Status  :  Belum Menikah  </p>
                    <br>
                    
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="komentar.php" method="post">
                        <h2 class="lg-view">Hubungi Saya</h2>
                        <h2 class="sm-view">Hubungi Saya</h2>
                        <input type="text" name="nama" placeholder="Nama">
                        <input type="email" name="email" placeholder="Alamat Email">
                        <input type="phone" name="hp" placeholder="Telepone" autocomplete="off">
                        <textarea rows="10" name="pesan" placeholder="Pesan"></textarea>
                        <input type="Submit" value="Kirim" name="Submit"><br><br>
                        <br><a href="komentar2.php">Lihat Comment</a>

                        
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php 
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $hp = $_POST['hp'];
        $pesan = $_POST['pesan'];

        include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO komen(nama,email,hp,pesan) VALUES('$nama','$email','$hp','$pesan')");
    }

    ?>


</body>

</html>