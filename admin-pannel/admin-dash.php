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
        <h1><span class="stroke1">Dash</span>Board</h1>

        

        <ul class="box-info">
            <li>
                <i class='fa fa-calendar-check dash_ico'></i>
                <span class="text">
                    <?php
                    $totReg = "(SELECT * FROM performing_arts)
                                UNION 
                                (SELECT * FROM informal_events)
                                UNION
                                (SELECT * FROM fine_arts)
                                UNION
                                (SELECT * FROM literary_arts)
                                UNION
                                (SELECT * FROM media_events)
                                UNION
                                (SELECT * FROM esports)
                                UNION
                                (SELECT * FROM special_events)";
                    $result = mysqli_query($conn, $totReg);

                    if ($cat1 = mysqli_num_rows($result)) {
                        echo "<h3>" . $cat1 . "</h3>";
                    } else {
                        echo "<h3> 0 </h3>";
                    }
                    ?>
                    <p>Total Registration</p>
                </span>
            </li>
            <li>
                <i class='fa fa-school dash_ico'></i>
                <span class="text">
                    <?php
                    $totReg = "SELECT * FROM score_board";
                    $result = mysqli_query($conn, $totReg);

                    if ($cat1 = mysqli_num_rows($result)) {
                        echo "<h3>" . $cat1 . "</h3>";
                    } else {
                        echo "<h3> 0 </h3>";
                    }
                    ?>
                    <p>Total Colleges</p>
                </span>
            </li>
            <li>
                <i class='fa fa-calendar-week dash_ico'></i>
                <span class="text">
                    <?php
                    $totReg = "SELECT * FROM events";
                    $result = mysqli_query($conn, $totReg);

                    if ($cat1 = mysqli_num_rows($result)) {
                        echo "<h3>" . $cat1 . "</h3>";
                    } else {
                        echo "<h3> 0 </h3>";
                    }
                    ?>
                    <p>Total Events</p>
                </span>
            </li>
            <li>
                <i class='fa fa-users-rectangle dash_ico'></i>
                <span class="text">
                    <?php
                    $totReg = "SELECT * FROM userlogin";
                    $result = mysqli_query($conn, $totReg);

                    if ($cat1 = mysqli_num_rows($result)) {
                        echo "<h3>" . $cat1 . "</h3>";
                    } else {
                        echo "<h3> 0 </h3>";
                    }
                    ?>
                    <p>Total Users</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3><span class="stroke1">Recent</span> Registration</h3>

                    <?php
                    $query = "(SELECT participantName, ccName, subEvent, timestamp_column, 'performing_arts' AS tablename FROM performing_arts)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'fine_arts' AS tablename FROM fine_arts)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'informal_events' AS tablename FROM informal_events)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'literary_arts' AS tablename FROM literary_arts)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'media_events' AS tablename FROM media_events)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'esports' AS tablename FROM esports)
                        UNION
                      (SELECT participantName, ccName, subEvent, timestamp_column, 'special_events' AS tablename FROM special_events)
                        ORDER BY timestamp_column DESC LIMIT 4";
                    $result = mysqli_query($conn, $query);

                    ?>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Participant Name</th>
                            <th>CC Name</th>
                            <th>Event Name</th>
                            <th>Sub Event Name</th>
                            <th>Date</th>
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
                                    echo "<td>" . $row['participantName'] . "</td>";
                                    echo "<td>" . $row['ccName'] . "</td>";
                                    echo "<td>" . $row['tablename'] . "</td>";
                                    echo "<td>" . $row['subEvent'] . "</td>";
                                    echo "<td>" . $row['timestamp_column'] . "</td>";
                                    echo "</tr>";
                                }

                            } else {
                                echo "No Result Found!!";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>Users</h3>
                    <?php
                    $query = "SELECT usrname, username FROM userlogin";
                    $result = mysqli_query($conn, $query);


                    ?>

                </div>
                <ul class="todo-list">

                    <?php
                    if ($result === false) {
                        // Query execution failed
                        echo "Error: " . mysqli_error($conn);
                    } else {
                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<li>";
                                echo "<p>" . $row['usrname'] . " || " . $row['username'] . "<p>";
                                echo "</li>";
                            }
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>

    </main>



</body>

<script src="adlogic/mainadmin.js"></script>

</html>