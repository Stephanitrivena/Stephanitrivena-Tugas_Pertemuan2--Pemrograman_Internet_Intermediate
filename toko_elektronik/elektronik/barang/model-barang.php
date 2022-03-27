<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function insert($id_barang, $nama, $merek, $harga)
        {   
            $sql = "INSERT INTO barang (id_barang, nama_barang, merek, harga) VALUES ('$id_barang', '$nama',
            '$merek', '$harga')";
            $this->conn->query($sql);
        }

        public function tampil_data()
        {
            $sql = "SELECT * FROM barang";

            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) { 
                return $baris;
            }
        }

        public function edit($id)
        { 
            $sql = "SELECT * FROM barang WHERE id_barang='$id'";
            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update($id_barang, $nama, $merek, $harga)
        {
            $sql = "UPDATE barang SET 
                    nama_barang = '$nama', 
                    merek ='$merek', 
                    harga ='$harga'
                    WHERE id_barang='$id_barang'";
            $this->conn->query($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM barang WHERE id_barang='$id'";
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
    }