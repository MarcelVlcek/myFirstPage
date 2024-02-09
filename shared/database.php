<?php
            $db_host = "";
            $db_user = "";
            $db_password = "";
            $db_name = "";
        
        //CREATE CONNECTION
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name );    

        //CHECK CONNECTION
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


    