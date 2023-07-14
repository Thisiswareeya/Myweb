<?php
include "newconnect.php";

$sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="newmember_update.php?id=<?php echo $row[id]; ?>" method="post">
     FirstName: <input type="text" name="firstname" value="<?php echo $row[firstname]; ?>"><br/>
     LastName: <input type="text" name="lastname" value="<?php echo $row[lastname]; ?>"><br>
     E-mail: <input type="email" name="email" value="<?php echo $row[email]; ?>"><br>
     Phone: <input type="text" name="phone" value="<?php echo $row[phone]; ?>"><br>
     <input type="submit" value="แก้ไขข้อมูล">
</form>
<?php
mysqli_close($conn);
?>