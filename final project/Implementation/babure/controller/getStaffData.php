<?php
require "connection.php";
class datafetch
{
    public $con;
    public $query="select * from staff";  
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();  
     }
       public function searchfetch($parameter)
      {
          $this->setter();
       $this->query.=" where full_name LIKE '%$parameter%' or email LIKE '%$parameter%' or 
       username LIKE  '%$parameter%' or phone_number LIKE '%$parameter%'";
      }
       public function orderfetch($column,$type)
      {
          $this->setter();
       $this->query.=" order by ".$column." ".$type;
      }
 public function normalfetch()
      {
          $this->setter();
       $this->query.=" order by staff_id DESC";      
      }
      public function fetchlength($start,$length)
      {
          $this->setter();
          $this->query.=" LIMIT $start , $length";
      }
      public function fetchdata()
      {
          $this->setter();
        $result=$this->con->conn->query($this->query); 
        return $result; 
      }
      public function fetchall()
      {
          $this->setter();
          $query1="select * from staff";
          $result=$this->con->conn->query($query1); 
        return $result->num_rows; 
      }
}
?>