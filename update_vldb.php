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
$sql = "SELECT * From vender_license";
$result = $con -> query($sql);

if (!$result){
 die ("Invalid query:". $con-> error);
}


if(isset($_POST['update']))
{
    $serial_number = $_POST['serial_number'];
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
    

    $query = "UPDATE vender_license SET company_name=$company_name,trcsl_letter_reference=$trcsl_letter_reference,trcsl_letter_date=$trcsl_letter_date,mod_clearence_requested_reference=$mod_clearence_requested_reference,clearance_requested_reference_date=$clearance_requested_reference_date,sy_clearance_received_letter_reference=$sy_clearance_received_letter_reference,sy_clearance_received_letter_date=$sy_clearance_received_letter_date,mod_approval_letter_reference=$mod_approval_letter_reference,mod_approval_letter_date=$mod_approval_letter_date,remarks_on_reject= $remarks_on_reject   WHERE serial_number=$serial_number ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
       
        header("Location: vender_licences.php");
    }
    else
    {
        
        header("Location:vender_licences.php");
    }
}

?>