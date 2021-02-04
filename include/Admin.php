<?php

class Admin {
    
    public $email;
    public $password;


public function check_login($connection) {
    
    $sql = "SELECT * FROM  `admin` WHERE `email` = '$this->email' AND `password`=  '$this->password';";
    $run = mysqli_query($connection, $sql);


     $count = mysqli_num_rows($run);

    if ($count == 0) { 
        return false; 
    }
        while ($row = mysqli_fetch_array($run)) {
            return $row['admin_id'];
        }
 }
}
?>