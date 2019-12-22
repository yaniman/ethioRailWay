<?php
require "connection.php";
class seat{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function seatcheck()
      {
          $this->setter();
       $query="select * from reservation ";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
    
       return $result;
      }
}
?>