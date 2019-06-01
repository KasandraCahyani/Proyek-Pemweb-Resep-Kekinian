<?php
include("config.php");
$username = isset($_GET['username']) ? $_GET['username'] : '';
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    if(isset($_POST['ubah_foto'])){ 
        // Jika user menceklis checkbox yang ada di form ubah, lakukan :  
            // Ambil data foto yang dipilih dari form  
            $foto = $_FILES['foto']['name'];  
            $tmp = $_FILES['foto']['tmp_name'];    
            // Rename nama fotonya dengan menambahkan tanggal dan jam upload  
            $fotobaru = $username." - ".$foto;   
            // Set path folder tempat menyimpan fotonya  
            $path = "gambar/".$fotobaru;  
            // Proses upload  
            if(move_uploaded_file($tmp, $path)){ 
                // Cek apakah gambar berhasil diupload atau tidak    
                // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim    
                $query = "SELECT * FROM user WHERE username='$username'";    
                $sql = mysqli_query($connection, $query); 
                // Eksekusi/Jalankan query dari variabel $query    
                $data = mysqli_fetch_array($sql); 
                // Ambil data dari hasil eksekusi $sql    
                // Cek apakah file foto sebelumnya ada di folder images    
                if(is_file("gambar/".$data['foto'])) // Jika foto ada      
                    unlink("gambar/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images    
                // buat query update
                $sql = "UPDATE user SET username='$username', email='$email', password='$password', nama_lengkap='$nama_lengkap', foto='$fotobaru' WHERE username='$username'";
                $query = mysqli_query($connection, $sql);
            
                // apakah query update berhasil?
                if( $query ) {
                    // kalau berhasil alihkan ke halaman list-siswa.php
                    header('Location: profil.php');
                } else {
                    // kalau gagal tampilkan pesan
                    die("Gagal menyimpan perubahan");
                }
            }
    } else {
        $sql = "UPDATE user SET username='$username', email='$email', password='$password', nama_lengkap='$nama_lengkap' WHERE username='$username'";
        $query = mysqli_query($connection, $sql);
        if( $query ) {
            // kalau berhasil alihkan ke halaman list-siswa.php
            header('Location: profil.php');
        } else {
            // kalau gagal tampilkan pesan
            die("Gagal menyimpan perubahan");
        }
    }
}
else{
    die("Akses dilarang...");
}
?>
