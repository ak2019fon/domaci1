<?php

require "../dbBroker.php";
require "../model/client.php";

if(isset($_POST['coachId'])){

    $status = Client::sortByName($_POST['coachId'], $conn);

    if ($status) {
        while ($row = $status->fetch_array()) {
            echo json_encode($row);
        }
    } else {
        echo "Failed";
    }
}