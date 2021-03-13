<?php
include "database.php";
include "constant.php";

// 
// MASYARAKAT
// 

// AMBIL NIK MASYARAKAT (REGISTRASI & LOGIN)
function ambilDataMasyarakat($nik){
    global $conn;

    $nik = $nik['nik'];
    $sql = "SELECT * FROM `masyarakat` WHERE `nik` = $nik ";
    $query = mysqli_query($conn, $sql);
    return $query;
}

// AMBIL USERNAME MASYARAKAT (REGISTRASI)
function ambilUsername($username){
    global $conn;

    $sql = "SELECT * FROM `masyarakat` WHERE `username` = '$username' ";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    return $row;
}

// TAMBAH DATA MASYARAKAT
function tambahDataMasyarakat($data){
    global $conn;

    $nik = $data['nik'];
    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];
    $telepon = $data['telepon'];

    $sql = "INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `status`) VALUES ('$nik', '$nama', '$username', '$password', '$telepon', 'nonAktif')";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    return $row;
}

// UPLOAD LAPORAN PENGADUAN
function kirimPengaduan($data){
    global $conn;

    // CEK UPLOAD GAMBAR BERHASIL (?)
    $gambar = uploadGambar($_FILES);
    if( !$gambar ){
        return false;
    }

    // ISI LAPORAN
    $nik = $_SESSION['nik'];
    $judul = $data['judul'];
    $isi = $data['isi'];
    $alamat = $data['alamat'];
    $namaGambar = $gambar;
    $tanggal = date('Y-m-d');

    $sql = "INSERT INTO 
    `pengaduan`(`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, 
    `foto`, `status`, `judul_pengaduan`, `alamat`) VALUES 
    ('', '$tanggal', '$nik', '$isi', '$namaGambar', '0', '$judul', '$alamat')";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);

    return $row;
}

function uploadGambar($gambar){
    global $server;

    $limitSize =  5 * 1204 * 1204;
    $namaFile = $gambar['gambar']['name'];
    $tmp = $gambar['gambar']['tmp_name'];
    $error = $gambar['gambar']['error'];
    $size = $gambar['gambar']['size'];

    // CEK GAMBAR
    if( $error == 4 ){
        echo '<script>alert("Pilih gambar terlebih dahulu!");window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/buatPengaduan.php"</script>';
        return false;
    }
    // CEK EKSTENSI
    $ekstensiValid = array('png', 'jpg', 'jpeg', 'gif');
    $tipe = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if( !in_array($tipe, $ekstensiValid) ){
        echo '<script>alert("File yang anda masukkan bukan gambar!");window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/buatPengaduan.php"</script>';
        return false;
    }
    // CEK UKURAN
    if( $size > $limitSize ){
        echo '<script>alert("Gambar yang anda pilih melebihi ukuran!");window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/buatPengaduan.php"</script>';
        return false;
    }
    // UPLOAD GAMBAR (LOLOS PENGECEKAN)
    // Buat nama file baru 
    $explode = explode('.', $namaFile);
    $ekstensi = strtolower(end($explode));
    $namaBaru = uniqid();
    $namaBaru .= ".";
    $namaBaru .= date('d-m-Y');
    $namaBaru .= ".";
    $namaBaru .= $ekstensi;

    move_uploaded_file($tmp, '../../../assets/image/'.$namaBaru);
    return $namaBaru;
}

// LIHAT PENGADUAN
function lihatTanggapanPengaduan($id){
    global $conn;
 
    $sql = "SELECT id_pengaduan, id_petugas, peng.tgl_pengaduan, nik, isi_laporan, foto, `status`, judul_pengaduan, alamat, tanggapan FROM pengaduan peng INNER JOIN tanggapan tang USING (id_pengaduan) WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $data[] = $row;
    return $row;
}

function lihatPengaduan($nik){
    global $conn;
 
    $sql = "SELECT * FROM pengaduan WHERE nik = '$nik'";
    $query = mysqli_query($conn, $sql);
    return $query;
}

function lihatPengaduanDetail($id){
    global $conn;
 
    $sql = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    return $query;
}

// AMBIL NAMA PETUGAS
function namaPetugas($id){
    global $conn;
 
    $sql = "SELECT * FROM petugas WHERE id_petugas = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// HAPUS LAPORAN
function hapusLaporan($id){
    global $conn;
 
    $sql = "DELETE FROM pengaduan WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    return $row;

}

// 
// ADMINISTRTOR
// 

// LOGIN ADMIN
function loginAdmin($username){
    global $conn;

    $sql = "SELECT * FROM petugas WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    return $query;
}

// DAFTAR PENGADUAN
function daftarPengaduan(){
    global $conn;

    $sql = "SELECT * FROM pengaduan";
    $query = mysqli_query($conn, $sql);
    return $query;
}

// UPDATE STATUS LAPORAN
function gantiStatus($id, $status){
    global $conn;

    $sql = "UPDATE pengaduan SET `status` = '$status' WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    return $row;
}

// VALIDASI PENGADUAN
function formValidasi($id){
    global $conn;

    $sql = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// DETAIL TANGGAPAN PADA DETAIL PENGADUAN
function tanggapanPengaduanCek($id){
    global $conn;
 
    $sql = "SELECT id_pengaduan, id_petugas, peng.tgl_pengaduan, nik, isi_laporan, foto, `status`, judul_pengaduan, alamat, tanggapan FROM pengaduan peng INNER JOIN tanggapan tang USING (id_pengaduan) WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($query);
    return $row;
}

function tanggapan($id){
    global $conn;

    $sql = "SELECT nama_petugas, tanggapan FROM petugas pet INNER JOIN tanggapan tang USING (id_petugas) WHERE id_pengaduan = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// UPDATE PADA FORM VALIDASI
function validasi($idPengaduan, $idPetugas ,$nik, $judul, $alamat, $isi, $tanggal, $tanggapan, $status){
    global $conn;
    // MENGUBAH TANGGAL PENGADUAN SESUAI FORMAT MYSQL
    $pecah = explode('/', $tanggal);
    $tgl =$pecah['0'];
    $bulan = $pecah['1'];
    $thn = $pecah['2'];
    $tglPengaduan = date('Y-m-d', strtotime("$tgl-$bulan-$thn"));

    $pengaduanSQL = "UPDATE `pengaduan` SET `tgl_pengaduan`='$tanggal',
                    `nik`='$nik',`isi_laporan`='$isi',`status`='$status',
                    `judul_pengaduan`='$judul',`alamat`='$alamat' WHERE id_pengaduan = $idPengaduan";
    $queryPengaduan = mysqli_query($conn, $pengaduanSQL);

    // MEMBUAT TANGGAL TANGGAPAN
    $tglTanggapan = date('Y-m-d');

    $tanggapanSQL = "INSERT INTO `tanggapan`(`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) 
                     VALUES ('',$idPengaduan,'$tglTanggapan','$tanggapan',$idPetugas)";
    $queryTanggapan = mysqli_query($conn, $tanggapanSQL);
    $row = mysqli_affected_rows($conn);
    return $row;

}



// 
// PETUGAS
// 

?>