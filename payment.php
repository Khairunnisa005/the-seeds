<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seeds</title>
    <link rel="stylesheet" href="./payment.css">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>
<body>
<nav>
    <a href="./">
        <div class="nav-title">
            <img src="./assets/images/logo.png" alt="">
        </div>
    </a>
        
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
                <a href="./pages/login.php">Login</a>
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
                Profile
            </div>
            <a href="./pages/login.php">Login</a>
            <input type="search" name="search" id="search" placeholder="Search Ticket">
            </div>
        </div>
</nav>

<div class="bg">

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

    <script src="./payment.js"></script>
</body>
</html>