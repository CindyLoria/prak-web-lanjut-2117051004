<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class="wrapper">
        <form action="<?=base_url('/kelas/' . $kelas['id'])?>" method="post" enctype ="multipart/form-data">
            <!-- manipulasi put -->
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field()?>

            <h1>Edit Kelas</h1>
            <br>
            <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>

            <div class="input-box">
                <input type="text" placeholder="Kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>" id="nama_kelas">
            </div>
            <td><button type="submit" value="Simpan" class="btn">Simpan</td>  
    </div>
    </form>
<?= $this->endSection()?>