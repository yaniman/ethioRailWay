<?php
require_once "connection.php";
class seatfetch
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function check($departure_city,$desination_city,$date,$seatclass)
      {
          $this->setter();
       $query="select seat_number from routes ro join reservation re where ro.route_id=re.route_id and ro.departure_city='$departure_city' and ro.destination_city='$desination_city' and re.travel_date='$date' and re.seat_class='$seatclass'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
       
       return $result;
      }
      public function route($departure_city,$desination_city)
      {
        $this->setter();
         $query="select * from routes where departure_city='$departure_city' and destination_city='$desination_city'";
        $result1=$this->con->conn->query($query);
        return $result1;
      }
}
?>