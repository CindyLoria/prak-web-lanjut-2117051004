<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    
<a href="<?= base_url('user/create')?>">Tambah data </a>
<div class = "table-resp">
        <table>
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
                    <a href="<?= base_url('user/' .$user['id'])?>">Detail</a>
                    <span class = "action-btn">
                        <a href='#'>Edit</a>
                        <a href='#'>Hapus</a>
                    </span>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?= $this->endSection()?>