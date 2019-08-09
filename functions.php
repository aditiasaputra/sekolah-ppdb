<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $koneksi;

    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $jenisKelamin = htmlspecialchars($data["jenis-kelamin"]);
    $agama = htmlspecialchars($data["agama"]);
    $kewarganegaraan = htmlspecialchars($data["kewarganegaraan"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $rtrw = htmlspecialchars($data["rtrw"]);
    $kelurahan = htmlspecialchars($data["kelurahan"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kotaKabupaten = htmlspecialchars($data["kota-kabupaten"]);
    $propinsi = htmlspecialchars($data["propinsi"]);
    $kodepos = htmlspecialchars($data["kodepos"]);
    $handphone = htmlspecialchars($data["handphone"]);
    $email = htmlspecialchars($data["email"]);
    $asalSekolah = htmlspecialchars($data["asal_sekolah"]);
    $alamatSekolah =htmlspecialchars($data["alamat_sekolah"]);
    $nilaiUn = htmlspecialchars($data["nilai_un"]);

    $query ="INSERT INTO ppdb 
                VALUES
            ('', '$nama', '$nisn', '$tempat', '$tanggal', '$jenisKelamin', '$agama', '$kewarganegaraan', '$alamat', '$rtrw', '$kelurahan', '$kecamatan', '$kotaKabupaten', '$propinsi', '$kodepos', '$handphone', '$email')
            ; INSERT INTO smp
                VALUES
            ('', '$asalSekolah', '$alamatSekolah', '$nilaiUn')";
    
    mysqli_multi_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>