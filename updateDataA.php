<?php  session_start();
include_once('nNdbCon/nnCon.php');  
$DATAidno=$_SESSION["idNo"];


$dte="";

//trim the data
function tt_inpt($dte)
{  
    $dte = trim($dte);
    $dte = stripslashes($dte);
    $dte = htmlspecialchars($dte);
    return $dte;
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$std_Sal=tt_inpt($_POST['vasal']);
$std_Fname=tt_inpt($_POST['vaFNme']);
$std_LName=tt_inpt($_POST['vaLme']);
$std_Dob=tt_inpt($_POST['vaDob']);
$std_gndr=tt_inpt($_POST['vaGend']);
$std_MrtlSts=tt_inpt($_POST['vaMrtlSts']);


$std_bld=tt_inpt($_POST['vaBldgrp']);
$std_rel=tt_inpt($_POST['valRel']);
$std_nat=tt_inpt($_POST['nNnationality']);
$std_hob=tt_inpt($_POST['nNhobbies']);

}

//revert to the index when the records are empty or null



$sql = "UPDATE emp_info SET emp_Salutation='$std_Sal',emp_FirstName='$std_Fname',emp_LastName='$std_LName',emp_DOB='$std_Dob',emp_Gender='$std_gndr',emp_MaritalStatus='$std_MrtlSts',emp_BloodGroup='$std_bld',emp_Religion='$std_rel',emp_Nationality='$std_nat',emp_Hobbies='$std_hob' WHERE empId='$DATAidno'";
if(mysqli_query($nnConnString, $sql)){
    echo "Records were updated successfully.";
} 




?>

