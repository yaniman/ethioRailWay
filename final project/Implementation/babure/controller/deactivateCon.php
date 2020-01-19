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
        $current=date('Y-m-d');
        $query1="insert into staff_report (staff_id,description,date) values('$parameter','account deactivated','$current')";
        $result1=$this->con->conn->query($query1);
       if($result1)
       {
          return 1;
       }
       else
       {
         return 0;
       }
      }
}
?>