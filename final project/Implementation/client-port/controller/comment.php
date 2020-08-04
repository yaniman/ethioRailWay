<?php
require '../model/storecomment.php';
class comment
{
    public $name;
    public $email;
    public $phone;
    public $comment;
    public function setter()
    {
        $this->name=$_POST["name"];
        $this->email=$_POST["email"];
        $this->phone=$_POST["phone"];
        $this->comment=$_POST["comment"];
    }
    public function comments()
    {
        $this->setter();
        $st=new storecomment;
        $result=$st->save($this->name,$this->email,$this->phone,$this->comment);
        if($result)
        {
            echo "Thank you for your comment";
            $this->emailsend($this->email);
        }
        else
        {
            echo "Some error occured try again later";
        } 
    }
 public function emailsend($email)
   {
     $to=$email;
     $subject='comment response';
     $message='Thank you for your comment will consider your critic';
     $headers="From:'$this->name' <'$this->email'>\r\n";    
     $headers.="Content-type:text/html\r\n";
     mail($to,$subject,$message,$headers);
   }
}
$self=new comment();
$self->comments();
   ?>