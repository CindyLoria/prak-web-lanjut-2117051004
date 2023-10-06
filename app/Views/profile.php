<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class="card">
        <div class="imgg">
        <img src="<?php echo base_url('cindy.jpg'); ?>" alt="cindy"  border="1.5px" ><br>
        </div>
        <div class="content">
            <div class="details">
                <div class="btn">
                <button type="button" style="width: 250px;">Nama : <?= $nama ?></button><br><br>
                <button type="button" style="width: 250px;">NPM : <?= $npm ?></button><br><br>
                <button type="button" style="width: 250px;">Kelas : <?= $kelas ?></button><br><br>
                
                </div>
                <?php if(session()->getFlashdata('success')) : ?>
                    <div class="rowprof">
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('success')?>
                            </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?= $this->endSection()?>