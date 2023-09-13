<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><center>BIODATA</center></h1>
    <br>
    <br>
    <div style="text-align:center;">
        <img src="<?php echo base_url('cindy.jpg'); ?>" alt="cindy" style="height: 250px; width: 250px; border-radius: 50%; object-fit: cover;"  border="1.5px" ><br>
        <br>
        <br>
        <button type="button" class="btn btn-outline-dark" style="width: 250px;">Nama : <?= $nama ?></button><br><br>
        <button type="button" class="btn btn-outline-dark" style="width: 250px;">Kelas : <?= $kelas ?></button><br><br>
        <button type="button" class="btn btn-outline-dark" style="width: 250px;">NPM : <?= $npm ?></button><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>