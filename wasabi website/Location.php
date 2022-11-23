<!--
    CSCI 426 Project
    Author: Collin Ardoin
    Date: 11/6/2022
--><!DOCTYPE HTML>
<html>
    <head>
        <!--Comments by: Collin Ardoin -->
        <!--This is the connection to CSS files required for the layout of the page -->
        <link rel="stylesheet" href="style/Navbar.css" />
        <link rel="stylesheet" href="style/Footer.css" />
        <link rel="stylesheet" href="style/redo/Location.css"/>
        <link rel="stylesheet" href="style/Home.css"/>
        <title>Location</title>
    </head>
    <body>
    <!--This is the creation of the header and the links inside it-->
    <header>
        <div class='navbar links'>
            <div class='left-side'>
                <a href="index.html">
                    <img src="assets/logo.svg" alt="">
                </a>

            </div>
            <div class='right-side links'>

                <div class="dropdown">
                    <button class="dropbtn">MENU</button>
                    <div class="hidden-items">
                        <a href="SaladMenu.html">Soups/Salads</a>
                        <a href="Appetizers.html">Appetizers</a>
                        <a href="Entree.html">Entrees</a>
                        <a href="Beverages.html">Beverages</a>
                        <a href="Sushi.html">Sushi</a>
                        <a href="Sashimi.html">Sashimi</a>
                    </div>
                </div>
                <a href="Location.php">Location</a>
                <a href="AboutUs.html">About Us</a>
                <a href="Reservation.html">Reservations</a>
            </div>

        </div>
        <div class='navbar-background'></div>

    </header>
    <!-- Creates the space between the header and the body-->
        <div class="spacer"></div>
    <!-- The creation of the two divs containing the address and hours of operation-->
        <div class = "background">
            <div class = map>
                <h1>3905 Ryan St, Lake <br>Charles, LA 70605</h1>
                <div class = "mapLoc">
                </div>
            </div>
            <div class = hours>
                <h1>Hours of Operation</h1>
                <ul>
                    <?php
                        $dbhost = "sql9.freesqldatabase.com";
                        $dbuser = "sql9580202";
                        $dbpass = "TYpymQBFpf";
                        $db = "sql9580202";
                        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

                        if(!$conn)
                        {
                            die("Connection failed!" . mysqli_connect_error());
                        }
                        else 
                        {
                            echo "";
                        }

                        $sql = "SELECT * FROM hours";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                            echo '<div class="column"><table class="center" style="font-size: 20px;" height="15px"> <tr> 
                            <th height="94px"> Days </th> 
                            <th height="94px"> Hours </th> 
                            </tr>';
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '<tr>
                                <td style="text-align: center" height="94px">' . $row["WeekDay"] . '</td>
                                <td style="text-align: center" height="94px"> ' . $row["OpenTime"] . '</td>
                                </tr>';

                            }
                            echo '</table>';
                        }
                        else
                        {
                            echo "0 results";
                        }
                        mysqli_close($conn);
                    ?>
                </ul>
            </div>
        </div>
<!-- Creates the space between the footer and the body-->
        <div class="spacer"></div>

<!-- This is the creation of the footer with all the links-->
        <div class="footer-container">
            <div class="flex-footer">
                <div class="footer-logo">
                    <img src="assets/logo.svg" alt="logo">
                </div>

                <div class="footer-contact">
                    <div>
                        <h2>Contact Us</h2>
                        <h4>Address:</h4>

                        <a href='https://www.google.com/maps/place/Wasabi+Japanese+Sushi+%26+Grill/@30.1818209,-93.2247643,14.49z/data=!4m5!3m4!1s0x0:0x4ad24a5f948251b2!8m2!3d30.187459!4d-93.2182302'
                           target='_blank'> <div class="text">3905 Ryan St, Lake Charles, LA 70605</div> </a>
                        <h4>Phone:</h4>

                        <a href='tel:+1-337-477-1755'>
                            <div class='text'>

                        <span>
                            <img  style="height: 20px; width: 20px; position: absolute;" src="assets/phone.svg" alt="phone">
                        </span>

                                <span style="padding-left: 25px;">
                            (337) 477-1755
                        </span>

                            </div>
                        </a>
                        <h4>Socials:</h4>
                        <a href='https://www.facebook.com/Wasabi-Japanese-Sushi-Grill-189573701210648/'
                           target='_blank' >
                            <div class='icon' >
                                <img style="height: 30px; width: 30px;" src="assets/facebook.svg" alt="facebook">
                            </div>
                        </a>
                    </div>
                </div>
                <!--All of the footer links to the other pages-->
                <div class="footer-links">
                    <h2>Links</h2>
                    <button class="btn">
                        <a href="index.html">Home</a>
                    </button>

                    <button class="btn">
                        <a href="SaladMenu.html">Menu</a>
                    </button>

                    <button class="btn">
                        <a href="Location.php">Location</a>
                    </button>

                    <button class="btn">
                        <a href="AboutUs.html">About Us</a>
                    </button>
                </div>
            </div>
        
        </div>
    </body>
</html>
