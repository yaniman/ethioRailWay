<?php
require "connection.php";
class viewticket
{
     public $con;
     public function setter()
     {
      $this->con=new connection();
       $this->con->connect();   
     }
      public function viewticketinf($ticketno)
       {
          $this->setter();
       $query="select rs.travel_date,rs.seat_class,rs.seat_number,rs.status,rs.ticket_number,
       r.departure_city,r.destination_city,r.departure_time,r.arrival_time,ut.full_name,ut.phone_number 
       from reservation rs JOIN routes r JOIN users_table ut JOIN payment p where rs.route_id=r.route_id AND rs.user_id=ut.user_id 
       AND rs.p_id=p.p_id AND rs.ticket_number='$ticketno'";
       $result=$this->con->conn->query($query);
       return $result;
      }
      public function viewticketinf1($phone,$date)
       {
          $this->setter();
       $query="select rs.travel_date,rs.seat_class,rs.seat_number,rs.status,rs.ticket_number
       ,r.departure_city,r.destination_city,r.departure_time,r.arrival_time,ut.full_name,ut.phone_number 
       from reservation rs JOIN routes r JOIN users_table ut JOIN payment p where rs.route_id=r.route_id
        AND rs.user_id=ut.user_id AND rs.p_id=p.p_id AND ut.phone_number='$phone' AND rs.travel_date='$date')";
       $result=$this->con->conn->query($query);
       return $result;
      }
}
?>