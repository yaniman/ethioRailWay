<?php
require "../controller/deactivateCon.php";
class deAccount
{
 public $id;
 public function setter()
 {
     $this->id=$_POST["user_id"];
 }
 public function deactivate()
 {
     $this->setter();
     $deac=new deactivateCon;
     $result=$deac->deactivator($this->id);
     if($result)
     {
          echo "deactivation succesfull";
     }
     else
     {
         echo "deactivation failed";
     }
 }
}
$self=new deAccount;
$self->deactivate();
?>