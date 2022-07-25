<?php
$title=$_POST['title'];

// echo "Name Is".$name ."Phone Number:".$phone;


include 'database.php';
$sql="INSERT INTO todos(title)VALUES('$title')";
//$sql="INSERT INTO todos(id,title,status) VALUES(NULL,'$title','0')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>