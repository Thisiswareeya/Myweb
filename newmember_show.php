<?php
include "newconnect.php";

$sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "$row[firstname] $row[lastname] $row[email] $row[phon] ";
    echo "<a href='newmember_del.php?id=$row[id]'> ลบ </a>";
    echo "<a href='newmember_edit.php?id=$row[id]'> แก้ไข </a>";
    echo "<br/>";

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>