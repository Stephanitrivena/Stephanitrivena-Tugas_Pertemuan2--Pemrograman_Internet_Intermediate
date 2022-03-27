<?php

include 'model-barang.php';

if (isset($_POST['simpan_barang'])) {
    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama_barang'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $insert = new Model();
    $insert->insert($id_barang, $nama, $merek, $harga); header('location:index.php');
}

if (isset($_GET['id_barang']))
{
    $id = $_GET['id_barang'];
    $model = new Model();
    if ($model->delete($id) > 0) {
        echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'index.php';
                </script>
            ";
    }
    
    
}

if (isset($_POST['edit_barang'])) {

    $id_barang = $_POST['id_barang'];
    $nama = $_POST['nama_barang'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $model = new Model();
    
    $model->update($id_barang, $nama, $merek, $harga); header('location:index.php');
}
