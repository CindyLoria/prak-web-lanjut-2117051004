<?= $this->extend('layouts/apps')?>
<?= $this->section('content')?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    
<section class="table__header">
    <h1>Data User</h1>
</section> 
<br>
<a href="<?= base_url('user/create') ?>" type="button" class="btn btn-primary">Tambah Data</a><br>
<br>
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i =1;
            foreach ($users as $user){
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $user['nama']?></td>
                <td><?= $user['npm']?></td>
                <td><?= $user['nama_kelas']?></td>
                <td>
                    <a href="<?= base_url('user/' .$user['id'])?>" class="btn btn-success" >Detail</a>
                    <span class = "action-btn">
                        <a href="<?= base_url('/user/' . $user['id'] . '/edit')?>" class="btn btn-primary" >Edit</a>
                        <!-- <a href='#'>Hapus</a> -->
                        <form action="<?=base_url('user/' . $user['id'])?>" method="post" style="display:inline-block">
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