<?php
require "../controller/loginController.php";
class loginModel
{
    private $username;
    private $password;
    public function _construct()
    {
        
       session_start();
       
    }
    public function setter()
    {
        //$username=$_POST('username');
        //$password=$_POST('password');
        $this->username="0923273069";
        $this->password="3069";
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
        $_SESSION['username']=$row['username'];
        header('Location: ../view/homePage.html');   
}
else
{
   echo "no data";
   header('Location: ../view/loginPage.html');
}
    }

}
$lm=new loginModel();
$lm->loginModule();
?>