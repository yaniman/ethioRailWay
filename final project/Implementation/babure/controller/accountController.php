<?php
require_once "connection.php";
class accountcontrol
{
     public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();
       session_start();   
     }
     public function account($fullname,$email,$phoneno,$priv,$username,$password,$status)
     {
           $this->setter();
       $query="insert into staff (full_name,email,username,phone_number,password,privilege,status) values('$fullname','$email','$username','$phoneno','$password','$priv','$status')";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
       $current=date('Y-m-d');
       $query2="select * from staff where username='$username'";
       $result2=$this->con->conn->query($query2);
$row=$result2->fetch_assoc();
$staff_id=$row["staff_id"];
        $query1="insert into staff_info (staff_id,start_date) values('$staff_id','$current')";
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
