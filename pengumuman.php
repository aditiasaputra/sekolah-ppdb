<?php require 'functions.php';
$ppdb = query("SELECT * FROM ppdb");
?>

<?php require 'templates/header.php'; ?>
<div class="container mt-3">
    <h5 class="font-weight-bold">Pengumuman</h5>
    <!-- <form action="" method="get" class="form-inline mt-3 mb-3">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Pencarian..." aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari!</button>
    </form> -->
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelurahan</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">Kota/Kabupaten</th>
                <th scope="col">Propinsi</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($ppdb as $row) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kelurahan']; ?></td>
                    <td><?= $row['kecamatan']; ?></td>
                    <td><?= $row['kota-kabupaten']; ?></td>
                    <td><?= $row['propinsi']; ?></td>
                    <td>
                        <h5><span class="badge badge-success">DITERIMA</span></h5>
                        <h5><span class="badge badge-danger">TIDAK DITERIMA</span></h5>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Preloader -->
<div id="preloader"></div>
<?php require 'templates/footer.php'; ?>