<?php
require "connection.php";
class reporter
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
          $result=array();
       $query="SELECT * FROM users_table ut JOIN reservation r WHERE  r.reserver like 'user' and ut.citizenship LIKE 'ethiopian'"; 
       $value=$this->con->conn->query($query);
       $result[0]=$value->num_rows;
        $query="SELECT * FROM users_table ut JOIN reservation r WHERE  r.reserver like 'user' and ut.citizenship LIKE 'nonethiopian'";
       $value=$this->con->conn->query($query);
       $result[1]=$value->num_rows;
       return $result;
      }
      public function citizenshipSearch()
       {
          $this->setter();
       $query="SELECT * FROM users_table WHERE citizenship LIKE 'ethiopian' ";
             
       $result=$this->con->conn->query($query);

    
       return $result->num_rows;
      }
       public function noncitizenshipSearch()
       {
          $this->setter();
       $query="SELECT * FROM users_table WHERE citizenship LIKE 'non-ethiopian' ";
             
       $result=$this->con->conn->query($query);

    
       return $result->num_rows;
      }
       public function routeSearch()
       {
          $this->setter();
          $value;
          $result= array();
          for($i=1;$i<7;$i++)
          {
       $query="SELECT * FROM reservation WHERE route_id = '$i'";
       $value=$this->con->conn->query($query);
       $result[$i-1]=$value->num_rows;
          }
       return $result;
      }
}

?>