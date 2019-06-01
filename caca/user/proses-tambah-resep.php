<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir
        $id_resep = $_POST['id_resep'];
        $nama_resep = $_POST['nama_resep'];
        $deskripsi = $_POST['deskripsi'];
        $penulis = $_POST['penulis'];
        $username_penulis = $_POST['username_penulis'];
        $tgl_dibuat = $_POST['tgl_dibuat'];
        $bahan = $_POST['bahan'];
        $langkah = $_POST['langkah'];
        $url = $_POST['url']."_on_".$tgl_dibuat;
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        // buat query

            $fotobaru = $foto;
            // Set path folder tempat menyimpan fotonya
            //$path = "C:/xampp/htdocs/sppm/foto-pemilih/".$fotobaru;
            $path = "gambar/".$fotobaru;
            // buat query
            $level="user";
            if(move_uploaded_file($tmp, $path)){
                $sql = "INSERT INTO resep (id_resep, nama_resep, deskripsi, penulis, tgl_dibuat, bahan, langkah, username_penulis, url, foto) 
                VALUE ('$id_resep','$nama_resep','$deskripsi','$penulis','$tgl_dibuat','$bahan','$langkah','$username_penulis','$url','$fotobaru')";
                $query = mysqli_query($connection, $sql);

                // apakah query simpan berhasil?
                if( $query ) {
                    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
                    echo (" <script language='JavaScript'>window.alert('Berhasil ditambahkan!');
                            window.location.href='resep.php?url=$url';
                            </script>");
                } else {
                    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                    echo (" <script language='JavaScript'>window.alert('Gagal Menambah resep!');
                            window.location.href='tambah-resep.php';
                            </script>");
                }
            }

} else {
    die("Akses dilarang...");
}

?>
