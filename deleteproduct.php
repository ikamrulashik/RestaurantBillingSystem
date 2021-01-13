<?php
include("conn.php");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['id'])){
    $userID = (int) $_GET['id'];
    if(!empty($_GET['id'])) {
        $delete = mysql_query("DELETE FROM Product WHERE id='$id'");
    }
    if($delete) {
        echo "Record deleted successfully";
    }
    else {
        echo "Sorry, record could not be deleted";
    }
  }
?>
