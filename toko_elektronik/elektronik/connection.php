<?php

    class Connection{
        public function get_connection(){
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "tokoelektronik";
            $connect = new mysqli($host, $user, $password, $dbname);
            return $connect;
            
            if(!$connect){
                die("error in connection");
            }
             // echo "database connected"
        }
    }
    
   
?>