<?php

session_start();

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
</head>
<body>
    <div class="loader">
        <div class="loader-text"></div>
        <img src="./assets/images/loader.png" alt="" class="loader-image">
    </div>

    <nav>
        <div class="nav-title">
            <img src="./assets/images/logo.png" alt="">
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
                Profile
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

                if($LoggedIn) {
                    echo 'Profile';
                } else {
                    NULL;
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

    <section id="hero-section">
        <div class="hero-container">
            <div class="left-hero">
                <div class="title">
                    <h1>The Seeds: Harmony</h1>
                    <h1>Under The Stars</h1>
                </div>

                <div class="subtitle">
                    <p>Join Us for an Enchanting Night of Live Music Under the Startlit Sky.</p>
                </div>

                <div class="countdown">
                    <div class="days">
                        <p id="days">00</p>
                        <p>Days</p>
                    </div>

                    <div class="colon">
                        <p>:</p>
                    </div>
                    <div class="hours">
                        <p id="hours">00</p>
                        <p>Hours</p>
                    </div>

                    <div class="colon">
                        <p>:</p>
                    </div>
                    <div class="minutes">
                        <p id="minutes">00</p>
                        <p>Minutes</p>
                    </div>

                    <div class="colon">
                        <p>:</p>
                    </div>
                    <div class="seconds">
                        <p id="seconds">00</p>
                        <p>Seconds</p>
                    </div>
                </div>

                <div class="cta">
                    <button class="btn-events" data-link="events-section">About Concert</button>
                </div>
            </div>

            <div class="right-hero">
                <img src="./assets/images/hero-content.png" alt="">
            </div>
        </div>
    </section>

    <div class="bg">
        <section id="events-section">
            <div class="events-container">
                <div class="left-events">
                    <div class="events-title">
                        <h1>Ro-Pop Party</h1>
                    </div>
                    <div class="events-content">
                        <p>Ro-Pop Party is a spectacular concert featuring the famous band, The Seeds. Expect high energy and catchy melodies for an unforgettable experience. Rock fans will love the guitars and vocals, while pop fans will enjoy the beats and lyrics. The Seeds will take the audience on a passionate, dynamic musical journey, ensuring a night of entertainment and excitement.</p>
                    </div>

                    <div class="events-details">
                        <div class="left-details">
                            <div class="icon">
                                <img src="./assets/svg/location2.svg" alt="">
                            </div>

                            <div class="details">
                                <p>Kampung Jackloth, Jember</p>
                                <p>Slamet Riyadi street No.168, Patrang District</p>
                            </div>
                        </div>
                        <div class="right-details">
                            <div class="icon">
                                <img src="./assets/svg/clock.svg" alt="">
                            </div>

                            <div class="details">
                                <p>Sat, 31 August 2024</p>
                                <p>21:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-events">
                    <img src="./assets/images/event.png" alt="">
                </div>
            </div>
        </section>

        <section id="personnel-section">
            <div class="personnel-container">
                <div class="personnel-title">
                    <h1>Our Personnel</h1>
                </div>

                <div class="personnel-wrapper">
                    <div class="personnel-card">
                        <div class="personnel-header">
                            <img src="./assets/images/Raymond.png" alt="">
                        </div>

                        <div class="personnel-body">
                            <div class="personnel-name">
                                <p>Raymond | Drummer</p>
                            </div>
                        </div>
                    </div>
                    <div class="personnel-card">
                        <div class="personnel-header">
                            <img src="./assets/images/Summer.png" alt="">
                        </div>

                        <div class="personnel-body">
                            <div class="personnel-name">
                                <p>Summer | Vocalist</p>
                            </div>
                        </div>
                    </div>
                    <div class="personnel-card">
                        <div class="personnel-header">
                            <img src="./assets/images/Josua.png" alt="">
                        </div>

                        <div class="personnel-body">
                            <div class="personnel-name">
                                <p>Josua | Guitarist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="seats-section">
            <div class="seats-container">
                <div class="seats-title">
                    <h1>Seats</h1>
                </div>

                <div class="seats-wrapper">
                    <img src="./assets/images/stage.png" alt="">

                    <div class="hover-area general-left">
                        <span class="tooltips">IDR 100.000</span>
                    </div>
                    <div class="hover-area general-right">
                        <span class="tooltips">IDR 100.000</span>
                    </div>
                    <div class="hover-area vip">
                        <span class="tooltips">IDR 250.000</span>
                    </div>
                    <div class="hover-area premium">
                        <span class="tooltips">IDR 175.000</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="tickets-section">
            <div class="tickets-container">
                <div class="tickets-wrapper">
                    <div class="tickets-card">
                        <div class="tickets-header">
                            <div class="tickets-content">
                                <div class="tickets-title">
                                    <p>KAMPUNG JACKLOTH</p>
                                    <p>Slamet Riyadi street, Jember</p>
                                </div>
                                <hr>
                                <div class="tickets-date">
                                    <p>August 31, 2024</p>
                                    <p>9 PM</p>
                                </div>

                                <div class="tickets-logo">
                                    <img src="./assets/images/logo.png" alt="">
                                </div>

                                <div class="tickets-type">
                                    <p>GENERAL</p>
                                </div>

                                <div class="tickets-price">
                                    <span>IDR</span>
                                    <p>100.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-body">
                            <a href="./buy.php?ticket=general">Buy Ticket</a>
                        </div>
                    </div>
                    <div class="tickets-card">
                        <div class="tickets-header">
                            <div class="tickets-content">
                                <div class="tickets-title">
                                    <p>KAMPUNG JACKLOTH</p>
                                    <p>Slamet Riyadi street, Jember</p>
                                </div>
                                <hr>
                                <div class="tickets-date">
                                    <p>August 31, 2024</p>
                                    <p>9 PM</p>
                                </div>

                                <div class="tickets-logo">
                                    <img src="./assets/images/logo.png" alt="">
                                </div>

                                <div class="tickets-type">
                                    <p>PREMIUM</p>
                                </div>

                                <div class="tickets-price">
                                    <span>IDR</span>
                                    <p>175.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-body">
                            <a href="./buy.php?ticket=premium">Buy Ticket</a>
                        </div>
                    </div>
                    <div class="tickets-card">
                        <div class="tickets-header">
                            <div class="tickets-content">
                                <div class="tickets-title">
                                    <p>KAMPUNG JACKLOTH</p>
                                    <p>Slamet Riyadi street, Jember</p>
                                </div>
                                <hr>
                                <div class="tickets-date">
                                    <p>August 31, 2024</p>
                                    <p>9 PM</p>
                                </div>

                                <div class="tickets-logo">
                                    <img src="./assets/images/logo.png" alt="">
                                </div>

                                <div class="tickets-type">
                                    <p>VIP</p>
                                </div>

                                <div class="tickets-price">
                                    <span>IDR</span>
                                    <p>250.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-body">
                            <a href="./buy.php?ticket=vip">Buy Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="schedule-section">
            <div class="schedule-container">
                <div class="schedule-wrapper">
                    <div class="schedule-title">
                        <h1>Schedule</h1>
                    </div>

                    <div class="schedule">
                        <div class="box">
                            <div class="schedule-time">
                                <p>21:00</p>
                            </div>
                            <div class="schedule-desc">
                                <p>Event Opening</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="schedule-time">
                                <p>21:30</p>
                            </div>
                            <div class="schedule-desc">
                                <p>Tha Call - The Seeds</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="schedule-time">
                                <p>21:40</p>
                            </div>
                            <div class="schedule-desc">
                                <p>My Sweet - The Seeds</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="schedule-time">
                                <p>21:50</p>
                            </div>
                            <div class="schedule-desc">
                                <p>TomorrowMorning - The Seeds</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="schedule-time">
                                <p>22:00</p>
                            </div>
                            <div class="schedule-desc">
                                <p>Woman Like You - The Seeds</p>
                            </div>
                        </div>
                        <div class="box box-border-bottom">
                            <div class="schedule-time">
                                <p>22:20</p>
                            </div>
                            <div class="schedule-desc">
                                <p>Event Closing</p>
                            </div>
                        </div>
                    </div>

                    <img src="./assets/images/schedule-1.png" alt="" class="schedule-img img1">
                    <img src="./assets/images/schedule-2.png" alt="" class="schedule-img img2">
                    <img src="./assets/images/schedule-3.png" alt="" class="schedule-img img3">
                    <img src="./assets/images/schedule-4.png" alt="" class="schedule-img img4">
                    <img src="./assets/images/schedule-5.png" alt="" class="schedule-img img5">
                    <img src="./assets/images/schedule-6.png" alt="" class="schedule-img img6">
                </div>
            </div>
        </section>

        <section id="weather-section">
            <div class="weather-container">
                <div class="weather-title">
                    <h1>Weather Forecast | Saturday, 31 August 2024</h1>
                </div>

                <div class="weather-wrapper">
                    <div class="weather">
                        <p>Morning</p>
                        <p>25°</p>
                        <p>Cloudly</p>
                    </div>
                    <div class="weather">
                        <p>Afternoon</p>
                        <p>30°</p>
                        <p>Sunny</p>
                    </div>
                    <div class="weather">
                        <p>Evening</p>
                        <p>20°</p>
                        <p>Very Cloudly</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contact-section">
            <div class="contact-container">
                <div class="contact-wrapper">
                    <div class="left-contact">
                        <p>Feel free to contact us with any questions.</p>
                    </div>

                    <div class="right-contact">
                        <img src="./assets/images/whatsapp.png" alt="">
                    </div>
                </div>
            </div>
        </section>
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
        window.location.href = '../backend/logout.php';
    }
    </script>

</body>
</html>