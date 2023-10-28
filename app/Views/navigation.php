<?= $this->extend('layouts/apps')?>
<?= $this->section('content')?>

<link rel="stylesheet" href="<?= base_url("assets/css/styles.css")?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100;200;300&family=Sriracha&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/user')?>">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('/kelas')?>">Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
<main>
    <section id = "awal">
        <h1>SELAMAT DATANG</h1>
        <p>Ini adalah Data Mahasiswa Ilmu Komputer Universitas Lampung</p>
    </section>
</main>

<?= $this->endSection()?>