<?php
require "../controller/fetchManagedData.php";
class managefetchdata
{
    private $user_id;
   
    
    public function setter()
    {
        
        $this->user_id=$_POST["user_id"];
        
    }
    public function managedata()
    {
            $this->setter();
            $fetchdata= new fetchdata;
            
         $result=$fetchdata->fetchsingledata($this->user_id);
             $row=$result->fetch_assoc();
             $ouput=array();
             if($row["staff_id"]=="")
             {
                $ouput["salary"]="";
             $ouput["role"]="";
             $ouput["cv"]="";
             }
             else{
                 $ouput["salary"]=$row["salary"];
             $ouput["role"]=$row["role"];
             $ouput["cv"]=$row["cv"];
             }
             
             echo json_encode($ouput);
    }

}
$self=new managefetchdata;
$self->managedata();
?>