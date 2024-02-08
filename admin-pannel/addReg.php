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
        <h1><span class="stroke1">Add</span> Registration</h1>
        <div class="table-data">
            <div class="order">
                <div class="head">

                    <?php

                    include("../dbconnect.php");
                    if (isset($_POST["register"])) {
                        $filename = $_POST["idcard"];
                       
                        $folder = "ID Cards/" . $filename;
                        


                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $ccname = $_POST['ccname'];
                        $Phno = $_POST['Phno'];
                        $mname = $_POST['mname'];
                        $sname = $_POST['sname'];

                        $query = "INSERT INTO $mname (participantName, email, ccName, contactNumber, subEvent)
            VALUES ('$name','$email','$ccname','$Phno','$sname')";

                        $data = mysqli_query($conn, $query);

                        if ($data) {
                            echo "Registered Successfully";
                        }else{
                            echo "Not Registered!!!!!!!!!";
                        }
                    }
                    ?>

                </div>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>Participant Name</th>
                            <th>Email</th>
                            <th>CC Name</th>
                            <th>Contact Number</th>
                            <th>Student ID</th>
                            <th>Event Name</th>
                            <th>Sub Event Name</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST">
                            <tr>
                                <td><input type="text" placeholder="Participant Name" class="ename" required name="name"
                                        id="name"></td>
                                <td><input type="text" placeholder="Email" class="ename" required name="email"
                                        id="email"></td>
                                <td><input type="text" placeholder="CC Name" class="ename" required name="ccname"
                                        id="ccname"></td>
                                <td><input type="text" placeholder="Contact Number" class="ename" required name="Phno"
                                        id="Phno"></td>

                                <td> <input type="file" id="idcard" name="idcard"></td>
                                <td><select class="cars" id="cars" required name="mname" id="mname">
                                        <option value="" selected disabled>Choose Event</option>
                                        <option value="fine_arts">Fine Arts</option>
                                        <option value="informal_events">Formal Events</option>
                                        <option value="literary_arts">Literary Arts</option>
                                        <option value="media_events">Media Events</option>
                                        <option value="performing_arts">Performing Arts</option>
                                        <option value="special_events">Special Events</option>
                                        <option value="esports">ESports</option>
                                        
                                    </select>
                                </td>
                                <td><select class="cars" id="eve" required name="sname" id="sname">
                                        <option value="" selected disabled>Choose Event</option>
                                        <option value="" selected disabled>Fine Arts</option>
                                        <option value="Mask it Up">Mask it Up</option>
                                        <option value="Art Attack"> Art Attack</option>
                                        <option value="Visual Creation">Visual Creation</option>
                                        <option value="Strikes and Strokes">Strikes and Strokes</option>
                                        <option value="Hues of Heena">Hues of Heena</option>

                                        <option value="" selected disabled>Formal Events</option>
                                        <option value="AI Quiz">AI Quiz</option>
                                        <option value="Code Race">Code Race</option>
                                        <option value="Ad Mad Show">Ad Mad Show</option>
                                        <option value="Whodunnit">Whodunnit</option>


                                        <option value="" selected disabled>Literary Arts</option>
                                        <option value="Tales Unboard">Tales Unboard</option>
                                        <option value="Information Vortex">Information Vortex</option>
                                        <option value="On the Contrary">On the Contrary</option>
                                        <option value="Word of Fiction">Word of Fiction</option>
                                        <option value="Speak up Speak out">Speak up Speak out</option>
                                        <option value="Trival Trivia">Trival Trivia</option>
                                        
                                        <option value="" selected disabled>Media Events</option>
                                        <option value="Snap Wrap">Snap Wrap</option>
                                        <option value="Rapid Cinema">Rapid Cinema</option>
                                        <option value="Art Byte">Art Byte</option>
                                        <option value="Screen Sensation">Screen Sensation</option>
                                        
                                        
                                        <option value="" selected disabled>Performing Arts</option>
                                        <option value="Grove mania">Grove mania</option> 
                                        <option value="Natya Sambharama">Natya Sambharama</option>
                                        <option value="Choreo Clash">Choreo Clash</option>
                                        <option value="Lyrical Wave">Lyrical Wave</option>
                                        <option value="Beat Brawl">Beat Brawl</option>
                                        <option value="Dramebaaz">Dramebaaz</option>
                                        <option value="Mono Mime">Mono Mime</option> 
                                        <option value="Quad Cinema">Quad Cinema</option>
                                        <option value="Gype zone">Gype zone</option>
                                        <option value="Sound Circus">Sound Circus</option>
                                        

                                        <option value="" selected disabled>Special Events</option>
                                        <option value="Threads of Elegance">Threads of Elegance</option>
                                        <option value="Mr & Ms Emmorzeal">Mr & Ms Emmorzeal</option>
                                        
                                        <option value="" selected disabled>ESPORTS</option>
                                        <option value="Stumble Guys">Stumble Guys</option>
                                        <option value="Clash Royale">Clash Royale</option>
                                        <option value="FIFA 24(EAFC-24)">FIFA 24(EAFC-24)</option>
                                        <option value="8 Ball Pool">8 Ball Pool</option>
                                        
                                    </select>
                                </td>
                                <td><button class="button" name="register" id="register">Add</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <script src="adlogic/mainadmin.js"></script>

</body>

</html>