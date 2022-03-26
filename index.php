<?php
    require('/model/database.php');
    require('/model/makes_db.php');
    require('/model/types_db.php');
    require('/model/vehicles_db.php');

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'model';
        }
    }

    if ($action == 'model') {
        $type_id = filter_input (INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
        if ($type_id == NULL  || $type_id == FALSE) {
            $type_id = 1;
        }
        $vehicles = get_vehicles();
       
        include('product_list.php');
  ?>