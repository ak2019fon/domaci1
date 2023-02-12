<?php

require "../dbBroker.php";
require "../model/client.php";

if (isset($_POST['name'])) {
    $status = Client::getByName($_POST['name'], $_POST['coachId'],$conn);
    if ($status) {
        while ($row = $status->fetch_array()) {
            echo json_encode($row);
        }
    } else {
        echo $status;
        echo "Failed";
    }
}

?>