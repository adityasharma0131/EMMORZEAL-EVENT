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
    <link rel="icon" type="image/png" href="../assets/titleLogo.png" />
</head>

<body>



    <!--=============== HEADER ===============-->

    <?php include("adparts/navi.php"); ?>
    <!--========== CONTENTS ==========-->
    <?php include("../dbconnect.php"); ?>
    <main>
        <h1><span class="stroke1">View</span> Events</h1>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <?php
                    $query = "SELECT evenName, subEventname FROM events";
                    $result = mysqli_query($conn, $query);


                    ?>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Sub Event Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result === false) {
                            // Query execution failed
                            echo "Error: " . mysqli_error($conn);
                        } else {
                            if (mysqli_num_rows($result) > 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['evenName'] . "</td>";
                                    echo "<td>" . $row["subEventname"] . "</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>

                        <!-- Additional rows can be added here -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="adlogic/mainadmin.js"></script>
</body>

</html>