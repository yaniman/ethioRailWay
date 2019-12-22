<?php
require "../controller/seat.php";
class seatClass
{
$seat=new seat;
public function verifySeat()
    {
         $result=$seat->seatcheck($this->username,$this->password);
         if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
	{
        //$f=$row['savings'];
        if($row['class']=="hard sleeper")
        {
            for($i<0;$i<100;$i++)
            {
                if($row['seatnumber']==$i)
                {

                }
            }
        }
        else
         if($row['class']== "soft sleeper")
        {
            for($i<0;$i<100;$i++)
            {
                if($row['seatnumber']==$i)
                {
                    
                }
            }
        }
        else if($row['class']=="normal")
        {
            for($i<0;$i<100;$i++)
            {
                if($row['seatnumber']==$i)
                {
                    
                }
            }
        }
	}
        
        //header('Location: ../view/homePage.html');   
}
else
{
}
    }
}
$st=new seatClass;
$st->verifySeat();
?>