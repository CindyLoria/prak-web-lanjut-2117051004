<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class="wrapper">
    <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
        <form action="<?=base_url('/kelas/store')?>" method="post" enctype ="multipart/form-data">
            <h1>Create Kelas</h1>
            <br>
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="row">
                    <?= session()->getFlashdata('errors')?>
                </div>
            <?php endif; ?>

            <div class="input-box">
                <input type="text" placeholder="Kelas" name="nama_kelas">
            </div>
            <td><button type="submit" value="Simpan" class="btn">Tambah</td>  
    </div>
    </form>
<?= $this->endSection()?>