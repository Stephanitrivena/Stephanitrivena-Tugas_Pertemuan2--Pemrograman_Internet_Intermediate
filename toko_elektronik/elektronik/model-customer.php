<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function insert($id, $nama, $alamat)
        {   
            $sql = "INSERT INTO customer (id_customer, nama_customer, alamat) VALUES 
            ('$id', '$nama', '$alamat')";

            $this->conn->query($sql);
        }

        public function tampil_data()
        {
            $sql = "SELECT * FROM customer";

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
            $sql = "SELECT * FROM customer WHERE id_customer='$id'";
            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update($id_customer, $nama, $alamat)
        {
            $sql = "UPDATE customer SET 
                    nama_customer = '$nama', 
                    alamat ='$alamat'
                    WHERE id_customer='$id_customer'";
            $this->conn->query($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM customer WHERE id_customer='$id'";
            $this->conn->query($sql);
            return mysqli_affected_rows($this->conn);
        }
    }