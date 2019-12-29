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
      public function userSearch()
       {
          $this->setter();
       $query="SELECT * FROM reservation WHERE reserver like 'user' ";
             
       $result=$this->con->conn->query($query);

    
       return $result->num_rows;
      }
      public function citizenshipSearch()
       {
          $this->setter();
       $query="SELECT * FROM reservation WHERE citizenship LIKE 'ethiopian' ";
             
       $result=$this->con->conn->query($query);

    
       return $result->num_rows;
      }
}
$self=new searchdb;
$self->userSearch();
?>