<?php

include("../dbconnect.php");

$sname  =$_GET ["sname"];




$query = "DELETE FROM popular_events WHERE sEvent='$sname'";
$data = mysqli_query($conn, $query);


if($data){
    echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/emmorzeal/admin-pannel/userSettigs.php'>";
}
else{
    echo "Failed to Delete the Registration";
}

?>