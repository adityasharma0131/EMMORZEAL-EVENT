<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Join the vibrant celebration at EMMORZEAL EVENT 2024! Immerse yourself in music, art exhibitions, cultural showcases, and more. Explore the schedule, performers, and highlights of this exciting college event.">
<meta name="keywords" content="College fest, Bunt's Sangha's SM Shetty College of Arts, Science & Commerce event, music festival, arts, cultural event, Bunt's Sangha's SM Shetty College of Arts, Science & Commerce fest schedule, performers, college event highlights, college events in Mumbai, Mumbai college fest, cultural events, music fest, workshops, Mumbai university events, college competitions, Mumbai college activities, student events, art exhibitions, college seminars, Mumbai college conferences, college cultural programs, Mumbai college workshops, college festivals in Mumbai, Mumbai college cultural fest, college event organizers in Mumbai">
<meta property="og:title" content="College Fest 2024: Bunt's Sangha's SM Shetty College of Arts, Science & Commerce - Celebrating Music, Arts, and Culture">
<meta property="og:description" content="Join the vibrant celebration at Bunt's Sangha's SM Shetty College of Arts, Science & Commerce Fest 2024! Immerse yourself in music, art exhibitions, cultural showcases, and more. Explore the schedule, performers, and highlights of this exciting college event.">
<meta property="og:image" content="assets/titleLogo.png">
<meta property="og:url" content="https://emmorzeal.com/">

    <!--=============== BOXICONS ===============-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="styles/style.css">

    <title>EMMORZEAL-2024</title>
    <link rel="icon" type="image/png" href="assets/titleLogo.png" />
</head>

<body>

    <!--=============== HEADER ===============-->
    <?php include 'parts/header.php'; ?>

    <section class="home" id="Home">


        <div class="video">

            <p class="smallheader">Bunts Sangha’s S.M.Shetty College of Science, Commerce & Management Studies, Powai. Permanently Affiliated to University of Mumbai. NAAC RE-ACCREDITED 'A+' GRADE ISO 21001:2018 CERTIFIED IMC RBNQ CERTIFICATE OF MERIT 2019</p>
            <p class="smallheader">Receipient of Best College Award By University of Mumbai 2021-2022</p>
            <h1 class="mainheader">
                EMMO<span class="stroke">RZEAL 20</span>24

            </h1>


        </div>

        <!-- <div class="media">
                <ul>
                    <li>
                        <a href="#facebook" ">
                            <i class="fa-brands fa-square-facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#facebook">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#facebook">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>

                </ul>
            </div> -->

        <video muted autoplay loop>
            <source src="assets/bacdrop.mp4">
        </video>
    </section>




    <div class="bgbox">
        <h1><span class="stroke1">ABOUT</span> US</h1>
        <p>

            Bunts sangha's s.m.shetty college of science, commerce & management studies, powai is committed to promote
            and propagate quality education with excellence. we believe that imparting education should not just offer
            academic degrees, but also unleash the human potential within every student. sufficient care is taken for
            the all-round development of students by tapping their logic, reasoning, creativity,imagination and talent
            capabilities.
            inter-collegiate competitions go a long way in bringing together a pool of extra-ordinary talents to a
            single platform yet again, we are going to make a holistic and earnest attempt to invite the talents from
            various colleges of mumbai to our college for our annual inter-collegiate festival

            "emmorzeal" - expressions with more zeal.</p>
    </div>



    <div class="bgbox">
        <h1><span class="stroke1">12</span>th,<span class="stroke1"> 13</span>th
            <span class="stroke1">JANUARY</span> 2024
        </h1>

        <div class="progress-bar">
            <div class="college">
                <div class="circular-progress1">
                    <div class="value-container1">0+</div>
                </div>
                <h2>COLLEGE</h2>
            </div>

            <div class="college">
                <div class="circular-progress2">
                    <div class="value-container2">0+</div>
                </div>
                <h2>EVENTS</h2>
            </div>

            <div class="college">
                <div class="circular-progress3">
                    <div class="value-container3">0+</div>
                </div>
                <h2>MEMBERS</h2>
            </div>

            <div class="college">
                <div class="circular-progress4">
                    <div class="value-container4">0+</div>
                </div>
                <h2>SPONSORS</h2>
            </div>

            <div class="college">
                <div class="circular-progress5">
                    <div class="value-container5">0+</div>
                </div>
                <h2>GUESTS</h2>
            </div>
        </div>
    </div>

    <div class="bgbox">
        <h1><span class="stroke1">OUR POPULAR</span> EVENTS</h1>
        <?php include('dbconnect.php');
        $query = "SELECT * FROM popular_events";
        $result = mysqli_query($conn, $query);

        ?>
        <div class="evenlist">

            <?php

            if ($result === false) {
                // Query execution failed
                echo "Error: " . mysqli_error($conn);
            } else {
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<article class='card'>";
                        echo "   <div class='temporary_text'>" . $row['mEvent'] . "</div>";
                        echo "   <div class='card_content'>";
                        echo "        <span class='card_title'>" . $row['sEvent'] . "</span>";
                        echo "        <span class='card_subtitle'>" . $row['dateLoc'] . "</span>";
                        echo "        <p class='card_description'>" . $row['content'] . "</p>";
                        echo "    </div>";
                        echo "</article>";
                    }

                } else {
                    echo "No Result Found!!";
                }
            }


            ?>



        </div>
    </div>

    <div class="bgbox">
        <h1><span class="stroke1">CORE</span> MEMBERS</h1>
        <div class="rot">
            <div class="members">
                <div class="team-mem">
                    <img src="assets/SHRIDEVI SHETTY.JPG">
                    <h4 class="memname">Shridevi Shetty</h4>
                    <p class="memdesc">Cultural Leader</p>
                </div>
                <div class="team-mem">
                    <img src="assets/WhatsApp Image 2024-01-03 at 1.33.49 PM.jpeg">
                    <h4 class="memname">Vaishanya Shetty</h4>
                    <p class="memdesc">Assistant Cultural Leader</p>
                </div>
                <div class="team-mem">
                    <img src="assets/shushant shetty.jpeg">
                    <h4 class="memname">Sushant Shetty</h4>
                    <p class="memdesc">Public Relation Officer</p>
                </div>
                <!-- <div class="team-mem">
                    <img src="assets/Disha Shetty.jpeg">
                    <h4 class="memname">Disha Shetty</h4>
                    <p class="memdesc">Assistant Public Relation Officer</p>
                </div>  -->

            </div>
        </div>
    </div>

    <div class="bgbox">
        <h1><span class="stroke1">OUR</span> PAST-SPONSORS</h1>

        <div class="scroller" data-direction="left" data-speed="slow">
            <div class="scroller__inner">

                <img src="assets/c9.png" alt="" />
                <img src="assets/choco.png" alt="" />
                <img src="assets/rc.png" alt="" />
                <img src="assets/ME.jpg" alt="" />
                <img src="assets/bsports.png" alt="" />
                <img src="assets/sg.png" alt="" />
                <img src="assets/evepaper.jpg" alt="" />


                
                <img src="assets/starbucks.png" alt="" />
                <img src="assets/maac.png" alt="" />
                <img src="assets/mcdi.webp" alt="" />
                <img src="assets/mirchi.png" alt="" />
                <img src="assets/flame.png" alt="" />
                <img src="assets/souled.webp" alt="" />
                <img src="assets/MH02.png" alt="" />
                <img src="assets/greenLight.jpg" alt="" />
                <img src="assets/radiocity.png" alt="" />
                <img src="assets/MMD.jpg" alt="" />
                <img src="assets/Rcity.png" alt="" />
                <img src="assets/MTVBeats.png" alt="" />
                <img src="assets/MG.png" alt="" />
                <img src="assets/cosmos.png" alt="" />
                <img src="assets/fly.png" alt="" />
                <img src="assets/amigo.png" alt="" />
                <img src="assets/nestle.png" alt="" />
                <img src="assets/storia.png" alt="" />
                <img src="assets/SB.jpg" alt="" />
                <img src="assets/WF.png" alt="" />
                <img src="assets/vlcc.png" alt="" />


            </div>
        </div>

    </div>

    <div class="bgbox">
        <h1><span class="stroke1">OUR</span> LOCATION</h1>
        <div class="location-ggl">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14097.136846460946!2d72.8869814920776!3d19.12046600395869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7e6bac151e3%3A0x314f9b74e1a34134!2sS%20M%20Shetty%20School%2C%20Powai!5e1!3m2!1sen!2sin!4v1703777402044!5m2!1sen!2sin"
                width="900" height="455"
                style="border-radius: .5rem; border: solid 4px black;  box-shadow:  0px 4px 4px 4px var(--bgbox);"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php include 'parts/footer.php'; ?>


    <!--=============== MAIN JS ===============-->
    <script src="logic/main.js"></script>
</body>

</html>