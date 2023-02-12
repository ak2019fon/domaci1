<?php

class Coach{

    public $coachId;
    public $userName;
    public $email;
    public $password;
    
    public function __construct($coachId, $email, $userName, $password)
    {
        $this->coachId = $coachId;
        $this->userName = $userName;
        $this->password = $password;
        $this->email = $email;
    }

    public static function getCoachId($userName, mysqli $conn){
        $q = "select coachId from coach where userName= '$userName'";
        return $conn->query($q);
    }

    public static function logIn($userName, $pass, mysqli $conn){
        $q = "select * from coach where userName= '$userName' and pass ='$pass' limit 1;";
        return $conn->query($q);
    }

    public static function check($userName, $conn){
        $q = "select * from coach where userName= '$userName'";
        return $conn->query($q);
    }

    public static function add($userName, $email, $pass, mysqli $conn)
    {
        $q = "INSERT INTO coach(userName, email, pass) VALUES('$userName', '$email', '$pass')";
        return $conn->query($q);
    }


}

?>