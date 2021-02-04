<?php

class User {
    public $first_name;
    public $second_name;
    public $third_name;
    public $age;
    public $email;
    public $password;
    public $visa_nom;
    public $national_id;
    public $address;
    public $mobile_nom;
    public $gender;


public function check_login($connection) {

    $sql = "SELECT * FROM `users` WHERE `email` = '$this->email' AND  `password` = '$this->password';";
    
    $run = mysqli_query($connection , $sql);

    $count = mysqli_num_rows($run);

        if ($count == 0) {
            return false;
        }

        while ($row = mysqli_fetch_array($run)) {
            return $row['user_id'];
        }
    }

    

}

?>