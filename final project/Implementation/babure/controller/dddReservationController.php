<?php
require_once "connection.php";
class checkdd
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function check($departure_city,$desination_city)
      {
          $this->setter();
       $query="select dt_id from travels where departure_city='$departure_city' and destination_city='$desination_city'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
    
       return $result;
      }
}
?>