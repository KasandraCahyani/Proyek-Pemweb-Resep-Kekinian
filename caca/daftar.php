<!DOCTYPE html>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" type="text/css" href="user/css/style.css";>
    </head>

    <body>
    <?php include'navbar.php' ?>
        <div class="kotak_daftar">
            <div class="tulisan_daftar"><a>Daftar Akun</a></div>
            <form action="proses-daftar.php" method="post"  enctype="multipart/form-data">
                <label>Nama Pengguna</label>
                <input type="text" name="username" class="form_daftar" placeholder="Nama Pengguna" required>
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form_daftar" placeholder="Nama lengkap" required>
                <label>Email</label>
                <input type="email" name="email" class="form_daftar" placeholder="Email" required>

                <label>Kata Sandi</label>
                <input type="password" name="password" class="form_daftar" placeholder="Kata Sandi" required>

                <label>Konfirmasi Kata Sandi</label>
                <input type="password" name="password_lagi" class="form_daftar" placeholder="Konfirmasi Kata Sandi" required>
                <label for="foto">Foto</label>
                <input type="file" name="foto">
                <br>
                <br>
                <input name="submit" type="submit" class="tombol_daftar" value="Daftar">

                <br/><br/>
                <center>
                    <a class="link" href="awal.html">Kembali</a>
                </center>
            </form>
        </div>>
    </body>
</html>