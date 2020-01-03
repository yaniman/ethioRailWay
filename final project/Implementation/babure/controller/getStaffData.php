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
       $this->query.=" where full_name LIKE '$parameter' or email LIKE '$parameter' or username LIKE '$parameter' or phone_number LIKE '$parameter'";
       //echo "query is".$query;
      // $result=$this->con->conn->query($query);
    
      // return $result;
      }
       public function orderfetch($column,$type)
      {
          $this->setter();
       $this->query.=" order by ".$column." ".$type;
       //echo "query is".$query;
       //$result=$this->con->conn->query($query);
    
       //return $result;
      }
 public function normalfetch()
      {
          $this->setter();
       $this->query.=" order by staff_id DESC";
       //echo "query is".$query;
       //$result=$this->con->conn->query($query);
    
       //return $result;
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
        $_SESSION["query"]=$this->query;
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