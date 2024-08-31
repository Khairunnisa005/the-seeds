<?php

$id_ticket = $_GET['id-ticket'] ?? '';

if ($id_ticket != null) {
    header('Location: ./index.php');
} else {

}
?>

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
    <section id="payment-section">
        <div class="payment-container">
            <div class="payment-wrapper">
                <div class="payment-countdown">
                    <div class="payment-title">
                        <h1>Complete Payment in</h1>
                    </div>

                    <div class="right-countdown">
                        <div class="hours">
                            <p id="hours">00</p>
                        </div>

                        <div class="colon">
                            <p>:</p>
                        </div>
                        <div class="minutes">
                            <p id="minutes">00</p>
                        </div>

                        <div class="colon">
                            <p>:</p>
                        </div>
                        <div class="seconds">
                            <p id="seconds">00</p>
                        </div>
                    </div>
                </div>

                <div class="payment-instruction">
                    <div class="left-instruction">
                        <div class="instruction-title">
                            <h1>Payment Instructions</h1>
                        </div>

                        <div class="instruction">
                            <p>Thank you for placing your order. Please select one of the following banks to make payment:</p>
                        
                            <ol>
                                <li>Bank Transfer</li>
                                    <ul>
                                        <li>BCA: Account Number: [1234 5678 9123], in the Name: The Seeds team &  Bank Code: 014</li>
                                        <li>Mandiri: Account Number: [1234 5678 9123], in the Name: The Seeds team & Bank Code: 014</li>
                                        <li>BRI: Account Number: [1234 5678 9123], in the Name: The Seeds team & Bank Code: 014</li>
                                        <li>BNI: Account Number: [1234 5678 9123], in the Name: The Seeds team & Bank Code: 014</li>
                                        <li>CIMB Niaga: Account Number: [1234 5678 9123], in the Name: The Seeds team & Bank Code: 014</li>
                                    </ul>
                                <li>Make a Transfer</li>
                                    <ul>
                                        <li>Enter the account number and nominal according to your bill.</li>
                                        <li>Confirm and complete the transaction.</li>
                                    </ul>

                                <li>Save Proof of Payment</li>
                                    <ul>
                                        <li>Save proof of transfer, then we will send your e-ticket pdf via email.</li>
                                    </ul>
                            </ol>
                        </div>
                    </div>

                    <div class="right-instruction">
                        <div class="instruction-title">
                            <h1>Payment Details</h1>
                        </div>

                        <div class="instruction">
                            <div class="top-instruction">
                                <p>ID Ticket</p>
                                <p><?= ?></p>
                            </div>
                        </div>
                    </div>
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

    <script src="./payment.js"></script>
</body>
</html>