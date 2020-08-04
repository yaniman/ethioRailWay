<?php
require_once "connection.php";
class managereserve
{
    public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function fetchroute($id)
      {
          $this->setter();
       $query="select * from routes where route_id='$id'";
       //echo "query is".$query;
       $result=$this->con->conn->query($query);
    
       return $result;
      }
      public function payment($price)
      {
          $current=date('Y-m-d');
          $status="pending";
         $this->setter();
          $query="insert into payment (payment_date,amount,status) values ('$current','$price','$status')";
        $result=$this->con->conn->query($query);
        $pid=mysqli_insert_id($this->con->conn);
        // $query="select user_id from users_table where full_name='$fullname' and email='$email' and phone_number='$phoneno' and age='$age' and citizenship='$citizenship' and id='$id'";
        // $result1=$this->con->conn->query($query);
        return $pid; 
      }
      public function user($fullname,$email,$phoneno,$age,$citizenship,$id)
      {
          $this->setter();
          $query="insert into users_table (full_name,email,phone_number,age,citizenship,id) values ('$fullname','$email','$phoneno','$age','$citizenship','$id')";
        $result=$this->con->conn->query($query);
        $uid=mysqli_insert_id($this->con->conn);
        // $query="select user_id from users_table where full_name='$fullname' and email='$email' and phone_number='$phoneno' and age='$age' and citizenship='$citizenship' and id='$id'";
        // $result1=$this->con->conn->query($query);
        return $uid;
        }
        public function reservation($rid,$uid,$departure_date,$current,$reservor,$seatclass,$seatno,$status,$pid,$ticketno)
        {
             $this->setter();
          $query1="insert into reservation (route_id,user_id,travel_date,book_date,reserver,seat_class,seat_number,status,p_id,ticket_number) values ('$rid','$uid','$departure_date','$current','$reservor','$seatclass','$seatno','$status','$pid','$ticketno')";
        $result=$this->con->conn->query($query1);
        $rid=mysqli_insert_id($this->con->conn);
        // $query2="select r_id from reservation where ticket_number='$ticketno'";
        // $result1=$this->con->conn->query($query2);
        
         return $rid;
        }
}

?>