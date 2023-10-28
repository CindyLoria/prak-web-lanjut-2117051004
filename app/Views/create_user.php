<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class="wrapper">
        <form action="<?=base_url('/user/store')?>" method="post" enctype ="multipart/form-data">
            <h1>Login</h1>
            <br>
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="row">
                    <?= session()->getFlashdata('errors')?>
                </div>
            <?php endif; ?>

            <input type="file" name="foto" id="foto">

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
<?= $this->endSection()?>