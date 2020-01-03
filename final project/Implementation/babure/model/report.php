<?php
//require "../controller/reportCon.php";
class report
{
 public $re;
 public function setter()
 {
     
     $this->re=new reporter;
 }
 public function userReport()
 {
     $this->setter();
     
     $result=$this->re->userSearch();
     return $result;
 }
 public function citizenReport()
 {
     $this->setter();
     
     $result=$this->re->citizenshipSearch();
     return $result;
 }
 public function noncitizenReport()
 {
     $this->setter();
     
     $result=$this->re->noncitizenshipSearch();
     return $result;
 }
 public function arrivalDestinationReport()
 {
     $this->setter();
     
     $result=$this->re->routeSearch();
     return $result;
 }
}
// $self=new report;
// $var=$self->userReport();
// echo "value1".$var[0];
?>