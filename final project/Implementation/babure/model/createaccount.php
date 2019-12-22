
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
       $new1=$this->firstname+""+substr($this->lastname,0,3)+""+substr($this->phoneno+""+strlen($this->phoneno)-4+""+strlen($this->phoneno));
       $this->username=$new1;
       $this->password=$new1;
       $this->fullname=$this->firstname+""+$this->lastname;
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
         header('location: ../view/adminHome.html');
       }
       else{
           header('location: ../view/createAccount.html');
       }
   }
}
$cr=new createaccount;
$cr->create();
?>