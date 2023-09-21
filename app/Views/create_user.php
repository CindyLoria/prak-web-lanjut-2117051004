<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
</head>
<!-- base_url("nama_asset/img/nama_foto.png") -->
<body>
    <div class="wrapper">
        <form action="<?=base_url('/user/store')?>" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="NPM" name="npm" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Kelas" name="kelas" required>
            </div>
            <td><button type="submit" value="Simpan" class="btn">Simpan</td>  
    </div>
    </form>
</body>
</html>