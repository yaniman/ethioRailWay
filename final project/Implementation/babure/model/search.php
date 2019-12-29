<?php
require "../controller/searchModel.php";
class search
{
    public $checker;
    public function setter()
    {
        session_start();
        $this->checker=$_GET["search-parameter"];
    }
    public function searchResult()
    {
        $this->setter();
        $searchCon=new searchdb;
        $result=$searchCon->searcher($this->checker);   
         if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
      $_SESSION["staff_id"]=$row["staff_id"];
      $_SESSION["username"]=$row["username"];
      $_SESSION["fullname"]=$row["full_name"];
        if($row["status"]==="active")
        {
        header('Location: ../view/admin/deactivateAccount.php'); 
        }  
        else{
             header('Location: ../view/admin/activateAccount.php'); 
        }
}
else
{
    echo "<h3 class='noresult'>No account like that</h3>";
}
    }
}
$self=new search;
$self->searchResult();
?>