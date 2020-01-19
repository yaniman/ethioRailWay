<?php
require "../controller/update.php";
class updaterManager
{
 public $id;
 public $salary;
 public $role;
 public $cv;
 public function setter()
 {
     $this->id=$_POST["staff_id"];
     $this->salary=$_POST["salary"];
     $this->role=$_POST["role"];
     $this->cv=$_POST["cv"];
 }
 public function update()
 {
     $this->setter();
     $up=new update;
     if($this->cv=="")
     {
      $result=$up->updater1($this->id,$this->role,$this->salary);   
     }
     else
     {
        $result=$up->updater($this->id,$this->role,$this->salary,$this->cv);
     }
     if($result)
     {
        header("location: ../view/admin/manageAccount.php");
    }
     else
     {
             header("location: ../view/admin/adminHome.php");

     }
 }
}
$self=new updaterManager;
$self->update();
?>