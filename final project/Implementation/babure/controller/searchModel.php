<?php
require "connection.php";
class searchdb
{
     public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function searcher($parameter)
       {
          $this->setter();
       $query="select * from staff where staff_id='$parameter' or username='$parameter' or full_name='$parameter' or email ='$parameter' ";
      
       $result=$this->con->conn->query($query);
    
       return $result;
      }
}
?>