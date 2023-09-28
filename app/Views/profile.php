<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
</head>
<body>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>