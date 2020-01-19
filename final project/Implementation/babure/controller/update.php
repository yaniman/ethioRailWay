<?php
require "connection.php";
class update
{
   public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function updater($staff_id,$role,$salary,$cv)
       {
          $this->setter();
       $query="update staff_info set role='$role', salary='$salary', cv='$cv' where staff_id='$staff_id'";
      
       $result=$this->con->conn->query($query);
        return $result;
      }
      public function updater1($staff_id,$role,$salary)
       {
          $this->setter();
       $query="update staff_info set role='$role', salary='$salary' where staff_id='$staff_id'";
      
       $result=$this->con->conn->query($query);
        return $result;
      }
       
}
?>