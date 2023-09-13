<?php
include("database.php");

if(isset($_POST['checkedId']) && isset($_POST['deleteAll'])){
  $checkedId = $_POST['checkedId'];
  $deleteMsg=deleteMultipleData($conn, $checkedId);

}
$fetchData = fetch_data($conn);

function fetch_data($conn){
  $query = "SELECT id, fullName, gender, email, city FROM developers ORDER BY id DESC";
  $result = $conn->query($query);

   if ($result->num_rows > 0) {
      $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
      $data= $row;
   } else {
      $data= []; 
   }
     return $data;
}

function deleteMultipleData($conn, $checkedId){
  
$checkedIdGroup = implode(',', $checkedId);
$query = "DELETE FROM developers WHERE id IN ($checkedIdGroup)";
$result = $conn->query($query);
if($result==true){
  return "Selected data was deleted successfully";
}

}
?>