<?php
require "../controller/activateCon.php";
class acAccount
{
 public $id;
 public function setter()
 {
     $this->id=$_POST["id"];
 }
 public function activate()
 {
     $this->setter();
     $ac=new activateCon;
     $result=$ac->activator($this->id);
     if($result)
     {
          header('Location: ../view/admin/adminHome.html'); 
     }
     else
     {
     header('Location: ../view/admin/searchAccount.html');
     }
 }
}
$self=new acAccount;
$self->activate();
?>