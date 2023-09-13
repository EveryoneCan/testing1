<?php

include_once('nNdbCon/nnCon.php'); 

$nnsqlSelectRecord= "SELECT * FROM emp_info";
$nnsqlScriptExe = $nnConnString->query($nnsqlSelectRecord);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
    <body>
<h1> Creating Table -  </h1>  

<!--  First Name was change to ID No -->
<table>
  <tr>
    <th>Row Id</th>
    <th>Employee ID No </th>
    <th>Salutation</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Marital Status</th>
    <th>Blood group</th>
    <th>Religion</th>
    <th>Nationality</th>
    <th>Hobbies</th>
    
  </tr>
  <tr>
    
    
  <?php

while($rowidno= $nnsqlScriptExe->fetch_assoc())
{
if('emp_MaritalStatus'==1){
  $mrtl="Married";
}
    ?>
    
    <td><?php echo $rowidno['emp_rowId'];  ?></td>
    <td><?php echo $rowidno['empId'];  ?></td>
    <td><?php echo $rowidno['emp_Salutation'];  ?></td>
    <td><?php echo $rowidno['emp_FirstName'];  ?></td>
    <td><?php echo $rowidno['emp_LastName'];  ?></td>
    <td><?php echo $rowidno['emp_DOB'];  ?></td>
   



    <?php $mrtl2= $rowidno['emp_Gender'];  ?>
    <?php
if($mrtl2==1){
  $mrtlss2="Male";
}
elseif($mrtl2==2){
  $mrtlss2="Female";
}
    ?>
     <td><?php echo $mrtlss2;  ?></td>






    <?php $mrtl= $rowidno['emp_MaritalStatus'];  ?>
    <?php
if($mrtl==1){
  $mrtlss="Married";
}
elseif($mrtl==2){
  $mrtlss="Unmarried";
}
    ?>
     <td><?php echo $mrtlss;  ?></td>



    <?php $mrtl11= $rowidno['emp_BloodGroup'];  ?>
    <?php
if($mrtl11==1){
  $mrtlss1="A";
}
elseif($mrtl11==2){
  $mrtlss1="B";
}
elseif($mrtl11==3){
  $mrtlss1="AB";
}
elseif($mrtl11==4){
  $mrtlss1="o";
}
    ?>
     <td><?php echo $mrtlss1;  ?></td>


    <td><?php echo $rowidno['emp_Religion'];  ?></td>
    <td><?php echo $rowidno['emp_Nationality'];  ?></td>
    <td><?php echo $rowidno['emp_Hobbies'];  ?></td>
 
  </tr>

  <?php   
}


?>
</table>
</body>
</html>
