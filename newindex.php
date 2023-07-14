<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Hello</title>
</head>
  <body> 
<?php

 $name = "WAREEYA CHEEKWANG <br><br>";
 $dmy = date("Y-m-d<br><br>");
 echo"Welcome to macity<br><br> $name";
 echo"Today $dmy <hr/>";

 function hello(){
    //ใช้คำสั่ง for แสดง hello world
    for($i=0 ; $i < 100 ; $i++){
        echo "Hello World $i <br/>";
    }
 }

 function myname(){
    //ใช้คำสั่ง while แสดงชื่อ 10
    $i = 0;
    while($i<10){
        echo "WAREEYA $i <br/>";
        $i++;
    }
 }

 function colors($color){
    foreach($color as $x){
        echo"$x, ";
    }
}


hello(); //เรียกใช้ฟังก์ชัน
myname(); //เรียกใช้ฟังก์ชัน

// //ใช้คำสั่ง for แสดง hello world
//  for($i=0 ; $i < 100 ; $i++){
//     echo "Hello World $i <br/>";
//  }
// //ใช้คำสั่ง while แสดงชื่อ 10
// $i = 0;
// while($i<10){
//     echo "WAREEYA $i <br/>";
//     $i++;
// }

// คำสั่ง foreach
$color = array("Red","Green","Blue","Yellow","Violet");
colors($color);

?>
</body>
</head>