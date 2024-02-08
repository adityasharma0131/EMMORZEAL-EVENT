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
        <h1><span class="stroke1">Update</span> Events</h1>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <?php
                    if (isset($_GET['en']) && isset($_GET['sen']) && isset($_GET['id'])) {
                        $en = $_GET['en'];
                        $sen = $_GET['sen'];
                        $id = $_GET['id'];
                    } else {
                        // Provide default values or handle the situation when the parameters are not present
                        $en = '';
                        $sen = '';
                        $id = '';
                    }

                    ?>

                </div>
                <table id="myTable">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sub Events</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="GET" action="">
                            <tr>
                                <td><input type="text" placeholder="Main Event Name" value="<?php echo $id ?>"
                                        class="ename" name="id"></td>
                                <td><input type="text" placeholder="Main Event Name" value="<?php echo $en ?>"
                                        class="ename" name="mname"></td>
                                <td><input type="text" placeholder="Sub Event Name" value="<?php echo $sen ?>"
                                        class="ename" name="sename">

                                <td><button class="button" name="submit">Save</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>



            </div>
        </div>
    </main>
</body>

</html>


<?php
include("../dbconnect.php");

if (isset($_GET['submit'])) {
    $eventName = $_GET['mname'];
    $subEventName = $_GET['sename'];
    $eveID = $_GET['id'];


    $query = "UPDATE events SET evenName='$eventName', subEventname='$subEventName' WHERE id='$eveID'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Record Updated Successfully";

    } else {
        echo "Record Not Updated";
    }
}

?>