
<?php
require ("../controller/accountController.php");
class createaccount
{
   public $firstname;
   public $lastname;
   public $email;
   public $phoneno;
   public $privilege;
   public $username;
   public $password;
   public $fullname;
   public $status;
   public function setter()
   {
       $this->firstname=$_POST['firstname'];
       $this->lastname=$_POST['lastname'];
       $this->email=$_POST['email'];
       $this->phoneno=$_POST['phone'];
       $this->privilege=$_POST['priv'];
       $new1=$this->firstname.substr($this->lastname,0,3).substr($this->phoneno,4);
       //$new1=$this->firstname;
       $this->username=$new1;
       $this->password=$new1;
       $this->fullname=$this->firstname." ".$this->lastname;
       $this->status="active";
   }
   public function create()
   {
    //    $Eimen=rand(0,10);
         $this->setter();
       $acc=new accountcontrol;
       $value=$acc->account($this->fullname,$this->email,$this->phoneno,$this->privilege,$this->username,$this->password,$this->status);
       if($value)
       {
           // java script page alert
           
          $this->emailsend($this->email);
         header('location: ../view/admin/manageaccount.php');
       }
       else{
           header('location: ../view/admin/adminHome.html');
       }
   }
   public function emailsend($email)
   {
     
     $to=$email;
     $subject='account creation';
     $message='<h1>your user is <h1>'.$this->username.'<h1>your password is '.$this->password;
     $headers="From:yonas bekele <yonasbekele4@gmail.com>\r\n";
     $headers.="Reply_To:yonasbek4@gmail.com\r\n";
     $headers.="Content-type:text/html\r\n";
     mail($to,$subject,$message,$headers);
   }
}
$cr=new createaccount;
$cr->create();
?>