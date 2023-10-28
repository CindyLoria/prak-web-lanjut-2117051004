<?= $this->extend('layouts/apps')?>
<?= $this->section('content')?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    
<section class="table__header">
    <h1>Data Kelas</h1>
</section> 
<br>
<a href="<?= base_url('kelas/create') ?>" type="button" class="btn btn-primary">Tambah Data Kelas</a><br>
<br>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            foreach ($kelas as $class){
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $class['nama_kelas']?></td>
                <td>
                    <span class = "action-btn">
                        <a href="<?= base_url('/kelas/' . $class['id'] . '/edit')?>" class="btn btn-primary" >Edit</a>
                        <!-- <a href='#'>Hapus</a> -->
                        <form action="<?=base_url('kelas/' . $class['id'])?>" method="post" style="display:inline-block">
                            <input type= "hidden" name ="_method" value= "DELETE">
                            <?=csrf_field()?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?= $this->endSection()?>