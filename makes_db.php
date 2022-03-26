<?php
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';

    function get_autos() {
        global $db;
        $query = 'SELECT * FROM makes
                ORDER BY make_id ASC';
        $statement = $db->prepare($query);
        $statement = execute();
        $makes = $statement->fetchAll();
        $statment->closeCusor();
        return $makes;

    }
?>