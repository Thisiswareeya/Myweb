<?php
include "newconnect.php";

$sql = "INSERT INTO tbl_member(firstname, lastname, email, phone)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]','$_POST[phone]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("location: newmember_show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>