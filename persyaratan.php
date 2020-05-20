<?php require 'templates/frontend/header.php'; ?>
<?php
$jenisBiaya = [
    "ikppdb" => ["Iuran Kegiatan PPDB(IKPPDB)", 300000, 300000],
    "ipsp" => ["Iuran Pengembangan Sarana Pendidikan (IPSP)", 4000000, 5000000],
    "ipp" => ["Iuran Pengelolaan Pendidikan (IPP) per bulan", 400000, 400000],
    "ipks" => ["Iuran Pengembangan Keterampilan Siswa (IPKS)", 400000, 40000],
    "ikk" => ["Iuran Kegiatan Kesiswaan (IKK)", 300000, 300000],
    "mpls" => ["Iuran Masa Pengenalan Lingkungan Sekolah (MPLS)", 250000, 250000],
    "pas" => ["Perlengkapan Administrasi SIswa (Raport, Foto, dll) (PAS)", 200000, 200000],
    "srg" => ["Pakaian Seragam (SRGM)", 700000, 700000],
];
?>
<!-- START PERSYARATAN -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h5 class="font-weight-bold">Persyaratan Keuangan.</h5>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Biaya</th>
                        <th scope="col">Gel. I (Rp)</th>
                        <th scope="col">Gel. II (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jenisBiaya as $jb => $jb_value) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $jb_value[0]; ?></td>
                            <td><?= number_format($jb_value[1], 0, '', '.'); ?></td>
                            <td><?= number_format($jb_value[2], 0, '', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th></th>
                        <th>Jumlah</th>
                        <th><?= number_format(6550000, 0, '', '.'); ?></th>
                        <th><?= number_format(7550000, 0, '', '.'); ?></th>
                    </tr>
                </tbody>
            </table>
            <h5 class="font-weight-bold">Persyaratan Pendaftaran.</h5>
            <ol>
                <li><span class="font-italic">Foto Copy</span> Ijazah/STTB (Surat Tanda Tamat Belajar) yang telah di legalisir 2 lembar;</li>
                <li><span class="font-italic">Foto Copy</span> SKHUN SMP/MTS yang telah di legalisir 2 lembar;</li>
                <li><span class="font-italic">Foto Copy</span> buku <i>raport</i> kelas VII s.d IX yang telah di legalisir;</li>
                <li>Pas Foto 2x3 dan 3x4, masing-masing 2 lembar;</li>
                <li><span class="font-italic">Foto Copy</span> NISN (Nomor Induk Siswa Nasional);</li>
                <li><span class="font-italic">Foto Copy</span> Akte Kelahiran dan KK (Kartu Keluarga);</li>
                <li>Surat Kelakuan Baik dari sekolah.</li>
            </ol>
            <span class="font-weight-bold">Panitia PPDB SMA ABC 20 JAKARTA.</span>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Layanan Online
                </div>
                <div class="card-body">
                    <p class="card-text">Jika mengalami kendala atau kesulitan, silahkan kontak petugas kami dibawah ini:</p>
                    <h5 class="card-title">Bpk. Supriyanto, S.Pd.</h5>
                    <span class="font-weight-bold">0877-8778-0550 (WhatsApp/Telepon/SMS)</span>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Dukungan
                </div>
                <div class="card-body">
                    <span class="font-weight-bold"><a href="http://www.m-studio.com">M-STUDIO</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PERSYARATAN -->

<!-- Preloader -->
<div id="preloader"></div>
<<<<<<< HEAD <?php require 'templates/footer.php'; ?>=======<?php require 'templates/frontend/footer.php'; ?>>>>>>>> 2dff8442023e38b05b53f03ffb98e9afb7241182