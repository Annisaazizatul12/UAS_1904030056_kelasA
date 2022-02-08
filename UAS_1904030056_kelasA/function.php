<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030056');

// Pemanggilan Tabel db_marketzul
function query($query)
{
    global $conn;

    // Mengambil Seluruh Data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // Pemanggilan Elemen Data Dengan Rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $id_produk = htmlspecialchars($data['id_produk']);
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga_produk = htmlspecialchars($data['harga_produk']);
    $stok_produk = htmlspecialchars($data['stok_produk']);
    $gambar_produk = htmlspecialchars($data['gambar_produk']);

    $query = "INSERT INTO db_marketzul
    VALUES
    (null,'$id_produk','$nama_produk','$harga_produk','$stok_produk','$gambar_produk');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_marketzul WHERE id=$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $id_produk = htmlspecialchars($data['id_produk']);
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $harga_produk = htmlspecialchars($data['harga_produk']);
    $stok_produk = htmlspecialchars($data['stok_produk']);
    $gambar_produk = htmlspecialchars($data['gambar_produk']);

    $query = "UPDATE db_marketzul SET
    id_produk ='$id_produk',
    nama_produk ='$nama_produk',
    harga_produk ='$harga_produk',
    stok_produk ='$stok_produk',
    gambar_produk ='$gambar_produk'

    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_marketzul WHERE nama_produk LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}