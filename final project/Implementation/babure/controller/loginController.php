<?php
require_once "connection.php";

  class loginController
  {
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function loginmodules($username,$password)
      {
          $this->setter();
       $query="select * from staff where username='$username' and password='$password'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
    
       return $result;
      }
  }
?>