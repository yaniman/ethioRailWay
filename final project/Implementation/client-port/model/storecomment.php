<?php
require_once "connection.php";
class storecomment
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function save($name,$email,$phone,$comment)
      {
          $this->setter();
       $query="insert into comment (name,email,phone,comment) values ('$name','$email','$phone','$comment')";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
       
       return $result;
      }
      
}
?>