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
       $query="select * from user_table where username='$username' and pass='$password'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
    
       return $result;
      }
  }
?>