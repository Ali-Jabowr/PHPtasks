<?php
    function openConnect(){
        // Database credentials
        $host = 'localhost:3307';
        $username = 'root';
        $password = '';
        $database = 'comments_db';

        // Create a connection
        $connection = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        return $connection;
    }


    function create_table($conn){

        $sql = "
            CREATE TABLE IF NOT EXISTS comments (
                id INTEGER  NOT NULL AUTO_INCREMENT,
                name VARCHAR(50) NOT NULL,
                comment TEXT NOT NULL,
                PRIMARY KEY (id)
            ); 
        ";

        if (isset($conn)){
            $conn->query($sql);
        }
        else{
            echo 'error';
        }

    }
?>