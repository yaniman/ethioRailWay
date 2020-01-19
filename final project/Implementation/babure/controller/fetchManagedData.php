<?php
require "connection.php";
class fetchdata
{
   public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function fetchsingledata($parameter)
       {
          $this->setter();
       $query="select * from staff_info where staff_id='$parameter'";
      
       $result=$this->con->conn->query($query);
       return $result;
      }
}
?>