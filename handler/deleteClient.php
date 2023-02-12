<?php

require "../dbBroker.php";
require "../model/client.php";

if (isset($_POST['clientId'])) {
    $status = Client::deleteById($_POST['clientId'], $conn);
    if ($status) {
        echo "Success";
    } else {
        echo $status;
        echo "Failed";
    }
}

?>