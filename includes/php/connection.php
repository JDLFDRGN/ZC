<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "zc";

        $con = new mysqli ("$host" , "$username" , "$password", "$database");
        if($con->connect_error){
            echo "failed";
            die();
        }
?>