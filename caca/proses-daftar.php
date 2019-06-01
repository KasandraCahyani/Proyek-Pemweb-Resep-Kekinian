<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir

        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_lagi = $_POST['password_lagi'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        // buat query
        if($password===$password_lagi){
            $fotobaru = $username." - ".$foto;
            // Set path folder tempat menyimpan fotonya
            //$path = "C:/xampp/htdocs/sppm/foto-pemilih/".$fotobaru;
            $path = "user/gambar/".$fotobaru;
            // buat query
            $level="user";
            if(move_uploaded_file($tmp, $path)){
                $sql = "INSERT INTO user (username, email, password,level,foto,nama_lengkap) VALUE ('$username', '$email', '$password','$level','$fotobaru','$nama_lengkap')";
                $query = mysqli_query($connection, $sql);

                // apakah query simpan berhasil?
                if( $query ) {
                    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
                    echo (" <script language='JavaScript'>window.alert('Pendaftaran Sukses!');
                            window.location.href='profil.php?status=sukses';
                            </script>");
                } else {
                    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                    echo (" <script language='JavaScript'>window.alert('Pendaftaran Gagal!');
                            window.location.href='daftar.php';
                            </script>");
                }
            }
        }
        if($password!=$password_lagi){
            echo (" <script language='JavaScript'>alert('Password tidak sesuai!');
                        window.location.href='daftar.php';
                        </script>");
        }
} else {
    die("Akses dilarang...");
}

?>
