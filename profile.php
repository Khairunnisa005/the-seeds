<?php

include "backend/conn_check.php";

$LoggedIn = isset($_SESSION['login']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seeds</title>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>

h2 {
    text-align: center;
    margin-top: 100px;
    margin-bottom: 50px;
    color: #FFF;
}

.history-payment table {
    align-items: center;
    justify-content: center;
    margin: auto;
    margin-bottom: 5%;
    color: #FFF;
    width: 80%;
    border: 1px;
    
}

.history-payment .feedback {
    margin: auto;
    width: 30%;
    height: 30%;
    margin-bottom: 5%;
}

textarea {
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
}

.button-feedback {

    align-items: flex-end;
    
}

.button-feedback button {
    width: 100%;
    margin-top: 10px;
    padding: 7px;
    background-color: pink;
    border-radius: 5px;
    cursor: pointer;
}





</style>
</head>
<body>


    <nav>
            <div class="nav-title">
            <a href="index.php"><img src="./assets/images/logo.png" alt=""></a>
        </div>
        
        <div class="nav-item-wrapper">
            <div class="nav-link link-events" data-link="events-section">
                Event
            </div>
            <div class="nav-link link-personnel" data-link="personnel-section">
                Personnel
            </div>
            <div class="nav-link link-seats" data-link="seats-section">
                Seats
            </div>
            <div class="nav-link link-schedule" data-link="schedule-section">
                Schedule
            </div>
            <div class="nav-link link-weather" data-link="weather-section">
                Weather
            </div>
            <div class="nav-link">
                <?php

                    if(!$LoggedIn) {
                        NULL;
                    } else {
                        echo 'Profile';
                    }

                ?>
            </div>
        </div>

        <div class="nav-button">
            <div class="button-group">
                <button data-link="tickets-section" class="btn-tickets">Get Ticket</button>
                <?php

                if($LoggedIn) {
                    echo '<a href="" onclick="confirmLogout(); return false;">Logout</a>';
                } else {
                    echo '<a href="./pages/login.php">Login</a>';
                }
                
                ?>
            </div>
            
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search Ticket">
            </div>
        </div>
        
        <div class="nav-item-mobile">
            <div class="left-nav">
                <img src="./assets/images/logo.png" alt="">
            </div>
            
            <div class="right-nav">
                <div class="nav-button-mobile">
                    <button data-link="tickets-section" class="btn-tickets">Get Ticket</button>
                </div>

                <div class="hamburger-container">
                    <div class="hamburger-wrapper">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item-wrapper-mobile">
            <div class="top-mobile">
                <div class="left-mobile">
                    <img src="./assets/images/logo.png" alt="">
                </div>

                <div class="right-mobile">
                    <img src="./assets/svg/x_symbol.svg" alt="" class="btn-close">
                </div>
            </div>

            <div class="bottom-mobile">
            <div class="nav-link link-events" data-link="events-section">
                Event
            </div>
            <div class="nav-link link-personnel" data-link="personnel-section">
                Personnel
            </div>
            <div class="nav-link link-seats" data-link="seats-section">
                Seats
            </div>
            <div class="nav-link link-schedule" data-link="schedule-section">
                Schedule
            </div>
            <div class="nav-link link-weather" data-link="weather-section">
                Weather
            </div>
            <div class="nav-link">
                
                <?php

                    if(!$LoggedIn) {
                        NULL;
                    } else {
                        echo 'Profile';
                    }
                
                ?>
                
            </div>

            <?php

            if($LoggedIn) {
                echo '<a href="" onclick="confirmLogout(); return false;">Logout</a>';
            } else {
                echo '<a href="./pages/login.php">Login</a>';
            }
            
            ?>

            
            <input type="search" name="search" id="search" placeholder="Search Ticket">
            </div>
        </div>
    </nav>



    <div class="bg">
        <div class="history-payment">
            <h2>History Payment Ticket <u>Khairunnisa</u></h2>
            <table border="1" cellspacing= "0">
                <tr align="center">
                    <td>No</td>
                    <td>Name</td>
                    <td>Ticket Type</td>
                    <td>Quantity</td>
                    <td>Date of Payment</td>
                    <td>Subtotal</td>
                    <td>Service Fee</td>
                    <td>Total</td>
                    <td>Payment Method</td>
                    <td>Status</td>
                </tr>
                <tr align="center">
                    <td>1. </td>
                    <td>Rizky Eka Ramadhan</td>
                    <td>The Seeds - Regular</td>
                    <td>3</td>
                    <td>11/8/2024</td>
                    <td>Rp170.000</td>
                    <td>Rp2.500</td>
                    <td>Rp172.500</td>
                    <td>BCA</td>
                    <td>Success</td>
                </tr>
            </table>
            <h2>Give Us Feedback!</h2>
            <div class="feedback">
                <textarea placeholder="Your feedback is really mean for us">
                </textarea>

                <div class="button-feedback">
                    <button type=submit name="feedback"><b>Send</b><submit>
                </div>
                
                    
                
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
        <div class="nav-item-wrapper">
            <div class="nav-link link-events" data-link="events-section">
                Event
            </div>
            <div class="nav-link link-personnel" data-link="personnel-section">
                Personnel
            </div>
            <div class="nav-link link-seats" data-link="seats-section">
                Seats
            </div>
            <div class="footer-logo">
                <img src="./assets/images/logo.png" alt="">
            </div>
            <div class="nav-link link-tickets" data-link="tickets-section">
                Tickets
            </div>
            <div class="nav-link link-schedule" data-link="schedule-section">
                Schedule
            </div>
            <div class="nav-link link-weather" data-link="weather-section">
                Weather
            </div>
        </div>

        <div class="footer-mobile">
        <div class="footer-logo">
                <img src="./assets/images/logo.png" alt="">
            </div>

            <div class="footer-link">
            <div class="nav-link link-events" data-link="events-section">
                Event
            </div>
            <div class="nav-link link-personnel" data-link="personnel-section">
                Personnel
            </div>
            <div class="nav-link link-seats" data-link="seats-section">
                Seats
            </div>
            <div class="nav-link link-tickets" data-link="tickets-section">
                Tickets
            </div>
            <div class="nav-link link-schedule" data-link="schedule-section">
                Schedule
            </div>
            <div class="nav-link link-weather" data-link="weather-section">
                Weather
            </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; Copyright by The Seeds 2024</p>
        </div>
        </div>
    </footer>

    <button class="scroll-top">
        <img src="./assets/svg/arrow-up.svg" alt="">
    </button>

    <script src="main.js"></script>

    <script>
        function confirmLogout() {
        alert('Are you sure to logout?');
        window.location.href = 'backend/logout.php';
    }
    </script>

</body>
</html>