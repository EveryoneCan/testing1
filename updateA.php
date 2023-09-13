<?php session_start();
include_once('nNdbCon/nnCon.php');  
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
    $id_number=tt_inpt($_POST['vaidNumber']);
}

//revert to the index when the records are empty or null
if(empty($id_number) || $id_number==''){
    header("location:update.php");
    die();
}


//send data from dasuni_ChechoutAAA table to the database before print 
$sqlSelectRecord = "SELECT * FROM emp_info WHERE empId= '$id_number'";
$sqlScriptExecution = $nnConnString->query($sqlSelectRecord);

if($sqlScriptExecution->num_rows>0) {
    while($rowidno= $sqlScriptExecution->fetch_assoc())
    {


        $select_Lname = $rowidno['emp_Salutation'];
        $select_Password = $rowidno['emp_FirstName'];
        $select_Emil = $rowidno['emp_LastName'];
        $select_Address = $rowidno['emp_DOB'];
        $select_Addresstwo = $rowidno['emp_Gender'];
/*
        // First Name was change to ID No
    echo "<br>";
    echo "ID Number  = $select_FName"; echo "<br>";
    echo "Last Name = $select_Lname"; echo "<br>";
    echo "Password = $select_Password"; echo "<br>";
    echo "Email = $select_Emil"; echo "<br>";
    echo "Address one = $select_Address"; echo "<br>";
    echo "Address Two = $select_Addresstwo"; echo "<br>";

    echo "<br>"; */ 
    $_SESSION["idNo"]=$id_number;
    header("location:updateData.php");


    }
}

else
{

    echo "this id no is not in the system";

}
mysqli_close($nnConnString);

?>