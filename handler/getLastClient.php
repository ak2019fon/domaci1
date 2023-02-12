<?php

require "../dbBroker.php";
require "../model/client.php";


$status = Client::getLastClient($conn);

if ($status) {
    while ($row = $status->fetch_array()) {
        echo json_encode($row);
    }
} else {
    echo $status;
    echo "Failed";
}