<?php 
    $dsn ='mysql:host=localhost;dbname=zippyusedautos';

    try {
        $db = new PDO($dsn);
    }
    catch (PDOException $e) {
        $error_message =$e->getMessage();
        include('database_error.php')
        exit();
    }
?>