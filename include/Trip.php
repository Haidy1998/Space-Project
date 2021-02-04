 <?php


class Trip {

    public $admin_id;
    public $trip_name;
    public $trip_price;
    public $trip_id;
    public $trip_agency;

    public function insert($connection) {

       $sql = "INSERT INTO  `trips`  (`admin_id`, `trip_name`, `trip_price`, `trip_id`, `trip_agency`) VALUES ('$this->admin_id', '$this->trip_name', '$this->trip_price', '$this->trip_id', '$this->trip_agency');";
       $run = mysqli_query($connection, $sql);
    }



}
?>