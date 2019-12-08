<?php
$koneksi = mysqli_connect("localhost", "root", "LINUX@1996v24", "db_sekolah");

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
            (NULL, '$nama', '$nisn', '$tempat', '$tanggal', '$jenisKelamin', '$agama', '$kewarganegaraan', '$alamat', '$rtrw', '$kelurahan', '$kecamatan', '$kotaKabupaten', '$propinsi', '$kodepos', '$handphone', '$email')
            ; INSERT INTO smp
                VALUES
            (NULL, '$asalSekolah', '$alamatSekolah', '$nilaiUn')";
    
    mysqli_multi_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function registrasi($data) {
    global $koneksi;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data["email"]);
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $passwordUlang = mysqli_real_escape_string($koneksi, $data["password_ulang"]);
    $level = htmlspecialchars($data["level"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('Akun sudah terdaftar!. Harap coba lagi!');
            </script>";
        return false;
    }
    
    if ($password !== $passwordUlang) {
        echo "<script>
                alert('Password anda salah!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users
                VALUES
            (NULL, '$nama', '$email', '$username', '$password', '$level');";
    mysqli_multi_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>