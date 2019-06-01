<!DOCTYPE html>
<html>
    <head>
        <title>Masuk</title>
        <link rel="stylesheet" type="text/css" href="user/css/style.css";>
    </head>
    <body>
    <?php include'navbar.php' ?>
            <div class="kotak_masuk">
            <div class="tulisan_masuk"><a>Masuk Akun</a></div>

            <form action="proses-masuk.php" method="post">
                <label>Nama Pengguna</label>
                <input type="text" name="username" class="form_masuk" placeholder="Nama Pengguna">

                <label>Kata Sandi</label>
                <input type="password" name="password" class="form_masuk" placeholder="Kata Sandi">

                <input type="submit" class="tombol_masuk" value="Masuk">

                <br/><br/>
                <center>
                    <a class="link" href="index.php">Kembali</a>
                </center>
            </form>
        </div>>
    </body>
</html>