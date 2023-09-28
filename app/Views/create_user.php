<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
</head>
<!-- base_url("nama_asset/img/nama_foto.png") -->
<body>
    <div class="wrapper">
        <form action="<?=base_url('/user/store')?>" method="post">
            <h1>Login</h1>
            <br>
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="row">
                    <?= session()->getFlashdata('errors')?>
                </div>
            <?php endif; ?>
            <div class="input-box">
                <input type="text" placeholder="Nama" name="nama"
                value="<?=old('nama')?>">
            </div>

            <div class="input-box">
                <input type="text" placeholder="NPM" name="npm" value="<?=old('npm')?>">
            </div>
            <div class="input-box">
                <!-- <input type="text" placeholder="Kelas" name="kelas"> -->
                <select name="kelas" id="kelas" value="">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <td><button type="submit" value="Simpan" class="btn">Simpan</td>  
    </div>
    </form>
</body>
</html>