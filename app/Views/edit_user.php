<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class="wrapper">
        <form action="<?=base_url('/user/' . $user['id'])?>" method="post" enctype ="multipart/form-data">
            <!-- manipulasi put -->
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field()?>

            <h1>Login</h1>
            <br>
            <?php if(session()->getFlashdata('errors')) : ?>
                <div class="row">
                    <?= session()->getFlashdata('errors')?>
                </div>
            <?php endif; ?>
            
            <img src= "<?= $user['foto'] ?? '<default-foto>' ?>" width="200px" height="250px">
            <input type="file" name="foto" id="foto">

            <div class="input-box">
                <input type="text" placeholder="Nama" name="nama"
                value="<?= $user['nama']?>" id="nama">
            </div>

            <div class="input-box">
                <input type="text" id = "npm" placeholder="NPM" name="npm" value="<?=$user['npm']?>">
            </div>

            <div class="input-box">
                <!-- <input type="text" placeholder="Kelas" name="kelas"> -->
                <select name="kelas" id="kelas" value="">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"<?=$user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                            <?= $item['nama_kelas']?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
            <td><button type="submit" value="Simpan" class="btn">Simpan</td>  
    </div>
    </form>
<?= $this->endSection()?>