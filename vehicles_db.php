<?php
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';

    function get_autos() {
        global $db;
        $query = 'SELECT * FROM vehicles
                ORDER BY price DESC';
        $statement = $db->prepare($query);
        $statement = execute();
        $vehicles = $statement->fetchAll();
        $statment->closeCusor();
        return $vehicles;

    }
?>