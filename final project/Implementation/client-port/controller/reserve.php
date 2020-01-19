<?php
include '../model/managereserve.php';

class reserve
{
            private $route_id;
            private $departure_date;
            private $seatclass;
            private $seatno;
            private $fullname;
            private $email;
            private $phoneno;
            private $age;
            private $citizenship;
            private $id;
            private $ticketno;
            private $uid;
            private $current;
            private $reservor;
            private $status;
            private $price;
            private $pid;
      public function Setter()
      {
            $data=json_decode(stripslashes($_POST["datas"]),true);
           
            
               
            $this->route_id=$data['routeid'];
             $this->departure_date=$data['date'];
             $this->seatclass=$data['seatclass'];
             $this->seatno=$data['seatno'];
             $this->fullname=$data['fullname'];
             $this->email=$data['email'];
             $this->phoneno=$data['phoneno'];
             $this->age=$data['age'];
             $this->citizenship=$data['citizenship'];
             $this->id=$data['id'];
             $this->price=$data['price'];
             $this->ticketno=$data['ticketno'];
            $this->pid=$data['pid'];
      }
      
    //   public function fetchroute()
    //   {
    //       $this->Setter();
    //       $manage=new managereserve;
    //      $result= $manage->fetchroute($this->route_id);
         
    //      $row=$result->fetch_assoc();
    //         $departure_city=$row["departure_city"];
    //         $destination_city=$row["destination_city"];
    //       $this->ticketno="ETH".substr($departure_city,0,3).substr($destination_city,0,3);
          
    //   }
      public function payment()
      {
          $this->Setter();
          $manage=new managereserve;
          $result=$manage->payment($this->price);
          return $result;
      }
public function userinfo()
      {
         
         $manage=new managereserve;
         $result= $manage->user($this->fullname,$this->email,$this->phoneno,$this->age,$this->citizenship,$this->id);
        //  $row=$result->fetch_assoc();
        //  $uid=$row["user_id"];
         return $result;
      }
public function reservor()
        {
            // $this->fetchroute();
            $this->Setter();
                $this->uid=$this->userinfo(); 
                $this->current=date('Y-m-d');
                if($this->pid=="")
                {
                $this->pid=$this->payment();
                }
                
                $this->reservor="user";
                $this->status="booked";
                $manage=new managereserve;
                //echo $this->route_id." ".$this->uid." ".$this->departure_date." ".$this->current." ".$this->reservor." ".$this->seatclass." ".$this->seatno." ".$this->status." ".$this->ticketno;
                 $result= $manage->reservation($this->route_id,$this->uid,$this->departure_date,$this->current,$this->reservor,$this->seatclass,$this->seatno,$this->status,$this->pid,$this->ticketno);
                 
                //  $row=$result->fetch_assoc();
                //  $vals=$row["r_id"];
                $output=array();
                $output["reservation_id"]=$result;
                $output["payment_id"]=$this->pid;
                echo json_encode($output);
        }
}

$self=new reserve;
$self->reservor();
?>