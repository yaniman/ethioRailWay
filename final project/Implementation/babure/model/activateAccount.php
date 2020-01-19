<?php
require "../controller/activateCon.php";
class acAccount
{
 public $id;
 public function setter()
 {
     $this->id=$_POST["user_id"];
 }
 public function activate()
 {
     $this->setter();
     $ac=new activateCon;
     $result=$ac->activator($this->id);
     if($result)
     {
          echo "activation successful"; 
     }
     else
     {
     echo "activation unsuccessful";
     }
 }
}
$self=new acAccount;
$self->activate();
?>