<!-- Membuat fungsi simpan untuk menyimpan data ke tabel pada database -->
<?php
    include "koneksi.php";              // mengambil koneksi
    include "create_message.php";

    $nama = $_POST['nama'];             // mengambil data nama pada database
    $kelas = $_POST['kelas'];           // mengambil data kelas pada database
    $alamat = $_POST['alamat'];         // mengambil data alamat pada database
    $foto = $_POST['foto'];             // mengambil data foto pada database

    if(isset($_POST['mahasiswa_id'])) {
        $sql = "UPDATE data
            SET nama='$nama', kelas='$kelas', alamat='$alamat', foto='$foto'
            WHERE id=".$_POST['mahasiswa_id'];
        $edit = $conn->query($sql);
        
        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    } else {
        // fungsi input data pada tabel
        $sql = "INSERT into data(nama, kelas, alamat, foto) VALUES('$nama','$kelas','$alamat','$foto')";
        $add = $conn->query($sql);

        // ketika berhasil maka akan diarahkan ke halaman index.php
        if($add) {
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        // ketika gagal muncul pesan error
        } else {
            $conn->close();
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    } 
?>