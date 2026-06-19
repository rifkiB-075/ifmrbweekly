<!-- Koneksi Database -->
<?php
$koneksi = mysqli_connect("localhost", "root", "", "ifmrbweekly");

function tampildata($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi tambah data
function tambahdata($data, $file) {
    global $koneksi;
    $nama =htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $namafoto =$file["name"];
    $tmpfoto =$file["tmp_name"];

    $newnamefoto = uniqid() . "_" . $namafoto;
    $path = "asset/img/" . $newnamefoto;

    if (move_uploaded_file($tmpfoto, $path)) {
        // File uploaded successfully

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto) VALUES 
    ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$newnamefoto')";
    mysqli_query($koneksi, $query);

    }

    return mysqli_affected_rows($koneksi);
}

// fungsi hapus data
function hapusdata($id) {
    global $koneksi;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


// ubah data
function ubahdata($data, $id) {
     global $koneksi;
    $nama =htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = htmlspecialchars($data["foto"]);
    
    $query = "UPDATE mahasiswa SET nama = '$nama', 
    nim = '$nim', 
    jurusan = '$jurusan', 
    email = '$email', 
    no_hp = '$no_hp', 
    foto = '$foto'
    WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
 
?>