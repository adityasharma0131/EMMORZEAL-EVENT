<?php
session_start();
echo " <h3>Welcome <span class='stroke1'>" . $_SESSION['user_name'] . "</span></h3>";

if (isset($_SESSION["user_name"])) {

} else {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="adstyles/style1.css">

    <title>EMMOREAL-2024</title>
    <link rel="icon" type="image/png" href="../assets/titleLogo.png"/>
</head>

<body>



    <!--=============== HEADER ===============-->

    <?php include("adparts/navi.php"); ?>
    <!--========== CONTENTS ==========-->
    <main>
        <h1><span class="stroke1">Add</span> CC Scoreboard</h1>
        <div class="table-data">

            <div class="order">
                <div class="head">
                    <?php

                    include("../dbconnect.php");

                    if (isset($_POST["submit"])) {
                        $ccname = $_POST['ccname'];
                        $score = $_POST['score'];
                        
                        

                        $query = "INSERT INTO score_board (ccname, score) VALUES ('$ccname', '$score')";
                        $data = mysqli_query($conn, $query);
                        
                        if ($data) {
                            echo "Added Successfully";
                        } else {
                            echo "You made some mistake!";
                        }
                    }
                    ?>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>CC name</th>
                            <th>Score</th>
                            <th>Add</th>

                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST">
                            <tr>
                            <td><input type="text" placeholder="Enter Name" class="ename" required name="ccname"></td>
                            <td><input type="text" placeholder="Enter Score" class="ename" required name="score"></td>
                                   
                                <td><button class="button" name="submit">Add</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
<script src="adlogic/editeve.js"></script>

</html>