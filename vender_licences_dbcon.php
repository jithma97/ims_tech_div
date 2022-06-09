<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "techdiv";

// Create connection
$con =  mysqli_connect($host, $username, $password,$dbName);

if($con  -> connect_error){
  die("Connection error");

}
else {
  echo'Thank you!';
}
if(isset($_POST['submit']))
{
$company_name=$_POST['company_name'];
$trcsl_letter_reference=$_POST['trcsl_letter_reference'];
$trcsl_letter_date=$_POST['trcsl_letter_date'];
$mod_clearence_requested_reference=$_POST['mod_clearence_requested_reference'];
$clearance_requested_reference_date=$_POST['clearance_requested_reference_date'];
$sy_clearance_received_letter_reference=$_POST['sy_clearance_received_letter_reference'];
$sy_clearance_received_letter_date=$_POST['sy_clearance_received_letter_date'];
$mod_approval_letter_reference=$_POST['mod_approval_letter_reference'];
$mod_approval_letter_date=$_POST['mod_approval_letter_date'];
$remarks_on_reject=$_POST['remarks_on_reject'];

$sql = "INSERT INTO vender_license (company_name,trcsl_letter_reference,trcsl_letter_date,mod_clearence_requested_reference,clearance_requested_reference_date,sy_clearance_received_letter_reference,sy_clearance_received_letter_date,mod_approval_letter_reference,mod_approval_letter_date,remarks_on_reject) 
VALUES ('$company_name','$trcsl_letter_reference','$trcsl_letter_date','$mod_clearence_requested_reference','$clearance_requested_reference_date','$sy_clearance_received_letter_reference','$sy_clearance_received_letter_date','$mod_approval_letter_reference','$mod_approval_letter_date','$remarks_on_reject')";
	
$insert = mysqli_query($con, $sql );
if($insert)
{
  header("vender_licences.php");
}
else{
    echo"use our coperation";
}

} 

?>