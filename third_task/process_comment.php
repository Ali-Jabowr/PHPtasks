<?php
    include 'comments_model.php';
    include 'db_connection.php';

    $conn = openConnect();
    create_table($conn);

    $comments = Null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        $comm = new Comment($name, $comment);
        $comm->set_comment($conn);

        $comments = $comm->get_comments($conn);
    }

    require 'index.php';

    $conn->close();

