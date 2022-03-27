<?php

include 'model-customer.php';

if (isset($_POST['simpan_customer'])) {
    $id = $_POST['id_customer'];
    $nama = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];

    $insert = new Model();
    $insert->insert($id, $nama, $alamat); 
    header('location:customer.php');
}

if (isset($_GET['id_customer']))
{
    $id = $_GET['id_customer'];
    $model = new Model();
    if ($model->delete($id) > 0) {
        echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'customer.php';
                </script>
            ";
    } else {
        echo "
                <script>
                alert('Data Gagal Dihapus');
                document.location.href = 'customer.php';
                </script>
            ";
    }
    
    
}

if (isset($_POST['edit_customer'])) {

    $id_customer = $_POST['id_customer'];
    $nama = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];

    $model = new Model();
    
    $model->update($id_customer, $nama, $alamat); 
    header('location: customer.php');
}
?>