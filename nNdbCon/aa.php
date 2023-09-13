<?php
include_once('nNdbCon/nnCon.php'); 
?>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 
  $sett_rowid=tt_inpt($_POST['username']);
  $frmset_desc=tt_inpt($_POST['password']);
  
  }
  require_once "config.php";
$username = $password = "";


if (empty(trim($_POST['username']))) {
  echo 'Enter the username';
} else {
  $username = trim($_POST['username']);
}

if (empty(trim($_POST['password']))) {
  echo 'Enter the password';
} else {
  $password = trim($_POST['password']);
}


<?php
$sql = 'SELECT id, username, password FROM User WHERE username = ?';

    if($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(1, $param_username, PDO::PARAM_STR);        
        $param_username = $username;

        if($stmt->execute()) {
            // First check if the user exists, then verify the password
            if($stmt->rowCOunt() == 1) {
                if($row = $stmt->fetch()) {
                    $id = $row['id'];
                    $username = $row['username'];
                    if($_POST['password'] == $row['password']) {
                        header('location:home.php');
                    } else {
                        // Invalid password, echo a general error msg
                        echo "Username or password not correct";
                    }
                } else {
                    // username no exists
                    echo "Username or password not correct";
                }
            } else {
                echo "Oops, something went wrong. Try again later";
            }

            // close stmt
            unset($stmt);
        }
    } 
  