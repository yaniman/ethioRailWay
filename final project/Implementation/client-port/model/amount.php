<?php
require_once "connection.php";
class amount
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function get($tno)
      {
          $this->setter();
       $query="select p.amount ,rs.status from reservation rs join payment p where rs.p_id=p.p_id and rs.ticket_number='$tno' ";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
       
       return $result;
      }
      
}
?>