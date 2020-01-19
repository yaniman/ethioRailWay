<?php
require "../controller/loginController.php";
class loginModel
{
    private $username;
    private $password;
    
    public function setter()
    {
        session_start();
        $this->username=$_POST['username'];
        $this->password=$_POST['password'];
       
    }
    public function loginModule()
    {
            $this->setter();
            $lc= new loginController();
            //echo "username is".$this->username;
         $result=$lc->loginmodules($this->username,$this->password);
         if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    if($row['status']=="active")
    {
        $_SESSION["username"]=$row['username'];
        if($row['privilege']=="staff")
        {
            header('Location: ../view/homePage.php');
        }
        else{
            header('Location: ../view/admin/adminHome.php');
        }
           
}
else
{
      header('Location: ../view/index.php?error=error3');   // try to attach message inside the header function
 
}
}
else
{
   header('Location: ../view/index.php?error=error1');
}


    }

}
$lm=new loginModel;
$lm->loginModule();
?>