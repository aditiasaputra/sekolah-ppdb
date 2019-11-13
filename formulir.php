<?php require 'functions.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if (tambah($_POST)) {
        echo "<script>
        alert('Data Berhasil Ditambahkan!')
        document.location.href = 'daftar.php';
        </script>";
    }
}
?>
<?php require 'templates/header.php'; ?>
<!-- START FORMULIR -->
<div class="datepicker"></div>
<div class="container mt-5">
    <div class="row">
        <div class="d-flex justify-content-center mb-3 col-md-12">
            <h2 class="font-weight-bold">Formulir Pendaftaran Siswa Baru <?= date("Y"); ?>/<?= date('Y', strtotime('+1 year'));; ?></h2>
        </div>
        <div class="col-md-11 offset-1">
            <form action="" method="post">
                <h4 class="font-weight-bold">Data Umum Siswa</h4>
                <!-- START IDENTITAS -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" nama">Nama Siswa Lengkap (Sesuai Akta Kelahiran)</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" nisn">Nomor Induk Siswa Nasional (NISN)</label>
                        <input type="text" name="nisn" class="form-control" id="nisn" required>
                    </div>
                </div>
                <!-- END IDENTITAS -->

                <!-- START TTL -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" tempat">Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control" id="tempat" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" tanggal">Tanggal Lahir</label>
                        <input type="text" name="tanggal" class="form-control" id="tanggal" required>
                    </div>
                </div>
                <!-- END TTL -->

                <!-- START JK, AGAMA, KEWARGANEGARAAN -->
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" jenis-kelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jenis-kelamin" id="jenis-kelamin" required>
                            <option></option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" agama">Agama</label>
                        <select class="form-control" name="agama" id="agama" required>
                            <option></option>
                            <option>Islam</option>
                            <option>Budha</option>
                            <option>Hindu</option>
                            <option>Kong Hu Cu</option>
                            <option>Kristen (Katholik)</option>
                            <option>Kristen (Protestan)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" kewarganegaraan">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" class="form-control" id="kewarganegaraan" required>
                    </div>
                </div>
                <!-- END JK, AGAMA, KEWARGANEGARAAN -->

                <!-- START ALAMAT -->
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold for=" alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" rtrw">RT / RW</label>
                        <input type="text" name="rtrw" class="form-control" id="rtrw" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" kelurahan">Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" id="kelurahan" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="kecamatan" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" kota-kabupaten">Kota / Kabupaten</label>
                        <input type="text" name="kota-kabupaten" class="form-control" id="kota-kabupaten" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" propinsi">Propinsi</label>
                        <input type="text" name="propinsi" class="form-control" id="propinsi" requuired>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="font-weight-bold for=" kodepos">Kode Pos</label>
                        <input type="text" name="kodepos" class="form-control" id="kodepos" required>
                    </div>
                </div>
                <!-- END ALAMAT -->

                <!-- START KONTAK -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" handphone">Nomor Handphone</label>
                        <input type="text" name="handphone" class="form-control" id="handphone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="font-weight-bold for=" email">E-Mail</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                </div>
                <!-- END KONTAK -->

                <!-- START PENDIDIKAN -->
                <h4 class="font-weight-bold">Data Riwayat Pendidikan</h4>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="asal_sekolah">Asal Sekolah (SMP/MTS)</label>
                        <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="alamat_sekolah">Alamat Sekolah (SMP/MTS)</label>
                        <input type="text" name="alamat_sekolah" class="form-control" id="alamat_sekolah">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nilai_un">Nilai Ujian Nasional (UN)</label>
                        <input type="text" name="nilai_un" class="form-control" id="nilai_un">
                    </div>
                </div>
                <!-- END PENDIDIKAN -->
                <!-- <h4 class="font-weight-bold">Data Pribadi dan Keluarga</h4>
                <h4 class="font-weight-bold">Data Orang Tua/Wali</h4> -->
                <div class="row justify-content-center">
                    <input name="submit" id="" class="btn btn-primary col-md-5" type="submit" value="Kirim">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END FORMULIR -->

<!-- Preloader -->
<div id="preloader"></div>
<?php require 'templates/footer.php'; ?>