<?php
include_once('nNdbCon/nnCon.php');
if(isset($_POST['save'])){
	$checkbox = $_POST['check'];
	for($i=0;$i<count($checkbox);$i++){
	$del_id = $checkbox[$i]; 
	mysqli_query($nnConnString,"DELETE FROM emp_info WHERE emp_rowId='".$del_id."'");
	$message = "Data deleted successfully !";
}
}
$result = mysqli_query($nnConnString,"SELECT * FROM emp_info");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Delete employee data</title>
</head>
<body>
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
    <th><input type="checkbox" id="checkAl"> Select All</th>
	<th>Employee Id</th>
	<th>Salutation</th>
	<th>First Name</th>
	<th>Last Name</th>
	
</tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["emp_rowId"]; ?>"></td>
	<td><?php echo $row["empId"]; ?></td>
	<td><?php echo $row["emp_Salutation"]; ?></td>
	<td><?php echo $row["emp_FirstName"]; ?></td>
	<td><?php echo $row["emp_FirstName"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<p align="center"><button type="submit" class="btn btn-success" name="save">DELETE</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>
</html>
