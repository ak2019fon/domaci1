<?php

require "../dbBroker.php";
require "../model/client.php";

if(isset($_POST['userName'])){

    $status = Client::getAll($_POST['userName'], $conn);

    if ($status) {
        while ($row = $status->fetch_array()) {
            echo json_encode($row);
        }
    } else {
        echo "Failed";
    }
}