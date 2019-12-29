<?php
require "connection.php";
class activateCon
{
   public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function activator($parameter)
       {
          $this->setter();
       $query="update staff set status='active' where staff_id='$parameter'";
      
       $result=$this->con->conn->query($query);
    
       return $result;
      }
}
?>