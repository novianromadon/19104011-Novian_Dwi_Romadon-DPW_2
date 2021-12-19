<!-- Deklarasi PHP -->
<?php
    include "koneksi.php";                                      // mengambil koneksi php
    session_start();
    $kelas = ['SE-03-A', 'SE-03-B'];                            // berisi array kelas
    $sql = "SELECT * FROM data";                                // untuk mengambil semua data di tabel "data"
    $data = $conn->query($sql);                                 // membuat alternatif variabel
    foreach($conn->query('SELECT COUNT(*) FROM data') as $row); // fungsi menghitung semua data di tabel "data"
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title>

    <style>
        .view-img {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
  </head>
  <body>
   

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <?php include "read_message.php" ?>
                </div>
                <!-- Form untuk input data Mahasiswa -->
                <form action="simpan.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                    </div>
                    <!-- Pilihan kelas mengambil data array pada variabel $kelas -->
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" class="form-control" required>
                            <option value="">Pilih</option>
                            <?php foreach($kelas as $kl) : ?>
                            <option value="<?= $kl; ?>"><?= $kl; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                    </div>
                    <!-- Input Foto -->
                    <div class="form-group">
                        Foto:
                        <input type="file" name="gambar_contoh" id="gambar_contoh" accept="image/*" onchange="loadfile(event)" required> <!-- Input file yang digunakan untuk mengupload gambar  mahasiswa ke database -->
                        <!-- Preview Foto -->            
                        <div class="mt-3 mb-3"> 
                            <img id="preview-img" alt="" width="100%">
                            <script type="text/javascript">
                                function loadfile(event) {
                                    var output = document.getElementById('preview-img');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                }
                            </script>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>
                    <!-- Menampilkan jumlah semua data menggunakan fungsi COUNT -->
                    <span class="badge badge rounded-pill bg-secondary text-white"><?= $row['COUNT(*)']; ?></span>
                </h4>
                
                <!-- Membuat card untuk setiap data yang masuk -->
                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Menampilkan nama sesuai data -->
                                <h4><?= $dt['nama']; ?></h4>
                            </div>
                            <div class="col-md-6">
                                <a class="float-right ml-3 text-danger" href="hapus_data.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                    <span class="fa fa-trash"></span>
                                </a>
                                <a class="float-right ml-3 text-success" href="update_form.php?mahasiswa_id=<?php echo $dt['id'] ?>" type="button" class="close">
                                    <span class="fa fa-edit"></span>
                                </a>
                
                                <!-- Menampilkan kelas sesuai data -->
                                <p class="text-right"><?= $dt['kelas']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Menampilkan alamat sesuai data -->
                                <p><?= $dt['alamat']; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 view-img">
                                <img><?= $dt['foto']; ?></img> <!-- Menampilkan foto mahasiswa -->
                            </div>
                        </div>
                    </div>
                </div>
               <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>