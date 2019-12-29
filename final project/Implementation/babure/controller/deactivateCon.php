<?php
require "connection.php";
class deactivateCon
{
   public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function deactivator($parameter)
       {
          $this->setter();
       $query="update staff set status='deactivated' where staff_id='$parameter'";
      
       $result=$this->con->conn->query($query);
    
       return $result;
      }
}
?>