<?php

include("../dbconnect.php");

$id = $_GET ["id"];



$query = "DELETE FROM score_board WHERE id='$id'";
$data = mysqli_query($conn, $query);


if($data){
    echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=https://emmorzeal.com/admin-pannel/editCC.php'>";
}
else{
    echo "Failed to Delete the Registration";
}

?>