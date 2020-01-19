<?php
require "../controller/getStaffData.php";
class mainDataManager
{
    public $output=array();
    public function setter()
    {
        session_start();
       
    }
    public function main()
    {
        $this->setter();
        $datam= new datafetch;
      if(($_POST["search"]["value"])!=="")
      {
      $datam->searchfetch($_POST["search"]["value"]);
      }
      if(isset($_POST["order"]))
      {
          $column=$_POST['order']['0']['column'];
          $type=$_POST['order']['0']['dir'];
          $datam->orderfetch($column,$type);
      }
      else{
          $datam->normalfetch();
      }
      if($_POST["length"]!=-1)
      {
          $start=$_POST['start'];
          $length=$_POST['length'];
          $datam->fetchlength($start,$length);
      }
      $result=$datam->fetchdata();
      $data=array();
       $filtered_rows=$result->num_rows;
        while($row=$result->fetch_assoc())
        {
            $sub_array=array();
           $sub_array[]=$row["staff_id"];
           $sub_array[]=$row["full_name"];
           $sub_array[]=$row["email"];
           $sub_array[]=$row["phone_number"];
           $sub_array[]=$row["username"];
           $sub_array[]=$row["privilege"];
           $sub_array[]=$row["status"];
            $sub_array[]='<button type="button" name="manage" id="'.$row["staff_id"].'" class="btn btn-warning btn-xs manage" data-toggle="modal" data-target="#manageModal">manage</button>';
            if($row["status"]=="active")
            {
                $sub_array[]='<button type="button" name="deactivate" id="'.$row["staff_id"].'" class="btn btn-warning btn-xs deactivate">deactivate</button>';
            }
            else
            {
                $sub_array[]='<button type="button" name="deactivate" id="'.$row["staff_id"].'" class="btn btn-warning btn-xs activate">activate</button>';
            }
            $data[]=$sub_array;
            
        }
       
       $this->output=array(
                "draw"                 =>intval($_POST["draw"]),
                "recordsTotal"         =>$filtered_rows,
                "recordsFiltered"      =>$datam->fetchall(),
                "data"                 =>$data
            );
            echo json_encode($this->output);
    }
}
$self=new mainDataManager;
$self->main();
//header('Location: test.php');
?>