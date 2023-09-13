<?php

include_once('nNdbCon/nnCon.php'); 


$empRel='';


function tt_inpt($dte)
{      
    
    //The trim() function removes whitespace and other predefined characters from both sides of a string.
    $dte = trim($dte);
    $dte = stripslashes($dte);
    $dte = htmlspecialchars($dte);
    return $dte;
}

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $empIdNum=tt_inpt($_POST['nNidNumber']);
  $empFName=tt_inpt($_POST['nNfirstName']);
  $empLName=tt_inpt($_POST['nNlastName']);
  $empSal=tt_inpt($_POST['nNsalutation']);
  $empBirth=tt_inpt($_POST['nNdob']);
  $empGender=tt_inpt($_POST['nNGender']);
  $empMarryUnmarry=tt_inpt($_POST['nNMarriedUnmarry']);
  $empBlood=tt_inpt($_POST['nNBloodGroup']);
  $empRel=tt_inpt($_POST['nNrel']);
  $empNationality=tt_inpt($_POST['nNnationality']);
  $empHobbies=tt_inpt($_POST['nNhobbies']);
}


$nnInsertdata="INSERT INTO emp_info(empId,emp_Salutation,emp_FirstName,emp_LastName,emp_DOB,emp_Gender,emp_MaritalStatus,emp_BloodGroup,emp_Religion,emp_Nationality,emp_Hobbies)
VALUES ('".$empIdNum."','".$empSal."','".$empFName."','".$empLName."','".$empBirth."','".$empGender."','".$empMarryUnmarry."','".$empBlood."','".$empRel."','".$empNationality."','".$empHobbies."')";




//execute the query(database connection, SQL script) when use phymyadmin
if (mysqli_query($nnConnString,$nnInsertdata))
{
	//echo "Record successful entered";

    $last_id = mysqli_insert_id($nnConnString);
  //  echo $last_id;
}


//send data from emp_info table to the database before print 
$nnsqlSelectRecord = "SELECT * FROM emp_info WHERE emp_rowId= '$last_id'";
$nNsqlScriptExecution = $nnConnString->query($nnsqlSelectRecord);



if($nNsqlScriptExecution->num_rows>0){
    while($nnRowId=$nNsqlScriptExecution->fetch_assoc()){
        $nnSelectRowId=$nnRowId['emp_rowId'];
        $nnEmpId=$nnRowId['empId'];
        $nnEmpSal=$nnRowId['emp_Salutation'];
        $nnFirstNAame=$nnRowId['emp_FirstName'];
        $nnLastName=$nnRowId['emp_LastName'];
        $nnGender=$nnRowId['emp_Gender'];
        $nnMaritalStatus=$nnRowId['emp_MaritalStatus'];
        $nnBloodGroup=$nnRowId['emp_BloodGroup'];
        $nnReligion=$nnRowId['emp_Religion'];
        $nnNationality=$nnRowId['emp_Nationality'];
        $nnHobbies=$nnRowId['emp_Hobbies'];
        $nnBirth=$nnRowId['emp_DOB'];   
    }
}

echo "id  $nnSelectRowId";echo "<br>";
echo "empID  $nnEmpId";echo "<br>";
echo "Emp salutation  $nnEmpSal";echo "<br>";
echo "Date of Birth  $nnBirth";echo "<br>";
echo "First Name  $nnFirstNAame";echo "<br>";
echo "Last Name  $nnLastName";echo "<br>";
echo "Gender  $nnGender";echo "<br>";
echo "Maritial Status  $nnMaritalStatus";echo "<br>";
echo "Blood Group  $nnBloodGroup";echo "<br>";
echo "Religion  $nnReligion";echo "<br>";
echo "Nationality  $nnNationality";echo "<br>";
echo "Hobbies  $nnHobbies";echo "<br>";

?>