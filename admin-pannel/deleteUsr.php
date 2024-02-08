<?php

include("../dbconnect.php");

$email  =$_GET ["email"];



$query = "DELETE FROM userlogin WHERE email='$email'";
$data = mysqli_query($conn, $query);


if($data){
    echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=https://emmorzeal.com/admin-pannel/editUser.php'>";
}
else{
    echo "Failed to Delete the Registration";
}

?>