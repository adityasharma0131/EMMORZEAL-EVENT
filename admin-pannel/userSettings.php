<?php
session_start();
echo " <h3>Welcome <span class='stroke1'>".$_SESSION['user_name']."</span></h3>";

if(isset($_SESSION["user_name"])){

}
else{
    header("location:../login.php");
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
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
        <h1><span class="stroke1">Settings</span></h1>
        <div class="table-data">
            <div class="order">
                <div class="head">
                <?php
                    include("../dbconnect.php");

                    $query = "SELECT * from popular_events";
                    $result = mysqli_query($conn, $query);


                    ?>
                <h2><span class="stroke1">POPULAR</span> EVENTS</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Main Event Name</th>
                            <th>Sub Event Name</th>
                            <th>Date & Location</th>
                            <th>Content</th>
                            <th>Operation</th>
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
                                        echo "<td>" . $row['mEvent'] . "</td>";
                                        echo "<td>" . $row['sEvent'] . "</td>";
                                        echo "<td>" . $row['dateLoc'] . "</td>";
                                        echo "<td>" . $row['content'] . "</td>";
                                        echo "<td>
                                        <button class='editBtn'><a href='popEdit.php?id=$row[id]&mname=$row[mEvent]&sname=$row[sEvent]&dateLoc=$row[dateLoc]&cont=$row[content]'>Edit</a></button>
                                        <button class='deleteBtn'><a href='popDelete.php?sname=$row[sEvent]'>Delete</a></button>
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
    </body>
    </html>