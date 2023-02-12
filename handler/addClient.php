<?php

require "../dbBroker.php";
require "../model/client.php";

if (isset($_POST['name']) && isset($_POST["lastName"]) && isset($_POST["age"]) && isset($_POST["weight"]) && isset($_POST["coachId"])) {
    $status = Client::add($_POST['name'], $_POST["lastName"], $_POST["age"], $_POST["weight"], $_POST["coachId"], $conn);
    if ($status) {
        echo "Success";
    } else {
        echo $status;
        echo "Failed";
    }
}

?>