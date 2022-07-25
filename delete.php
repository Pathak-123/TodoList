<?php
    include 'database.php';
    $id=$_GET['id'];

   // $sql="DELETE FROM todos WHERE id=$id";
   $sql="UPDATE todos set status='-1' WHERE id='$id'";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>