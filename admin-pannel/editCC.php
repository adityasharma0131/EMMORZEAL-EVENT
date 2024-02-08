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
        <h1><span class="stroke1">Edit</span> Scoreboard</h1>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <?php
                    include("../dbconnect.php");

                    $query = "SELECT ccname, score, id from score_board";
                    $result = mysqli_query($conn, $query);


                    ?>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CC Name</th>
                            <th>Score</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form>

                            <?php
                            if ($result === false) {
                                // Query execution failed
                                echo "Error: " . mysqli_error($conn);
                            } else {
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['ccname'] . "</td>";
                                        echo "<td>" . $row['score'] . "</td>";
                                        echo "<td>
                                            <button class='editBtn'><a href='updateCC.php?&ccname=$row[ccname]&score=$row[score]&id=$row[id]'>Edit</a></button>
                                            <button class='deleteBtn'><a href='deleteCC.php?id=$row[id]'>Delete</a></button>
                                            </td>";
                                        echo "</tr>";
                                    }

                                } else {
                                    echo "No Result Found!!";
                                }
                            }
                            ?>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <script src="adlogic/editeve.js"></script>
    </main>
</body>

</html>