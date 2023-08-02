<?php

    class Comment{

        private $name;
        private $comment;

        function __construct($name, $comment){
            $this->name = $name;
            $this->comment = $comment;
        }

        public function set_comment($conn){
            /**
             * function to add the comment to the database
             */

            $sql = "INSERT INTO comments ( name, comment) VALUES ( ?, ?);";

            // protection from SQL Injection
            $stm = $conn->prepare($sql);
            $stm->bind_param("ss", $this->name, $this->comment);

            $stm->execute();
        }

        public function get_comments($conn){
            /**
             * function to fetch all the comments from the databaes
             */


            $sql = "SELECT * FROM comments";
            $result = $conn->query($sql);

            if ($result){
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                return $rows;
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }