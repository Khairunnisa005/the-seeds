<?php

session_start();

$LoggedIn = isset($_SESSION['login']);

$ticket = $_GET['ticket'] ?? '';

if (!in_array($ticket, ['general', 'premium', 'vip'])) {
    header('Location: ./index.php');
} else {

}

$id_ticket = "THSD" . rand(10000, 999999);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seeds</title>
    <link rel="stylesheet" href="./buy.css">
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
        <section id="countdown-section">
            <div class="countdown-container">
                <div class="countdown-wrapper">
                    <div class="left-countdown">
                        <h1>Harmony Under</h1>
                        <h1>The Stars</h1>
                    </div>

                    <div class="right-countdown">
                    <div class="days">
                        <p id="days">00</p>
                    </div>

                    <div class="colon">
                        <p>:</p>
                    </div>
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
            </div>
        </section>

        <section id="tickets-section">
            <div class="tickets-container">
                <div class="tickets-wrapper">
                    <div class="left-tickets">
                        <div class="stage">
                            <?php
                                if ($ticket == 'general') {
                            ?>
                            <img src="./assets/images/general.png" alt="">
                            <?php
                                }
                            ?>
                            <?php
                                if ($ticket == 'premium') {
                            ?>
                            <img src="./assets/images/premium.png" alt="">
                            <?php
                                }
                            ?>
                            <?php
                                if ($ticket == 'vip') {
                            ?>
                            <img src="./assets/images/vip.png" alt="">
                            <?php
                                }
                            ?>
                        </div>

                        <div class="text">
                        <?php
                                if ($ticket == 'general') {
                            ?>
                            <p>The General's seating at concerts is a standing area providing a live and energetic experience. Spectators can enjoy good views and feel the atmosphere of the event intensely. The absence of chairs allows the audience to move freely and dance during the concert. Public facilities such as toilets and food stands are available to facilitate needs during the event.</p>
                            <?php
                                }
                            ?>
                        <?php
                                if ($ticket == 'premium') {
                            ?>
                            <p>Premium seating offers comfort with a good view of the stage. The seats are comfortable and there is ample legroom. Premium ticket holders get priority access to the concert area. You can also enjoy food and drink services which are available for purchase near your seat.</p>
                            <?php
                                }
                            ?>
                        <?php
                                if ($ticket == 'vip') {
                            ?>
                            <p>VIP seating offers an exclusive and comfortable experience with a strategic location for the best view of the stage. The seats feature extra cushioning, armrests, and more legroom. Food and drink service directly to the seat and exclusive merchandise including t-shirts and posters. You can also meet and take photos with The Seeds, adding to the exclusive value of VIP tickets.</p>
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="right-tickets">
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
                                <?php
                                if ($ticket == 'vip') {
                            ?>
                                <p>VIP</p>
                            <?php
                                }
                            ?>    
                                <?php
                                if ($ticket == 'premium') {
                            ?>
                                <p>PREMIUM</p>
                            <?php
                                }
                            ?>    
                                <?php
                                if ($ticket == 'general') {
                            ?>
                                <p>GENERAL</p>
                            <?php
                                }
                            ?>    
                                </div>

                                <div class="tickets-price">
                                    <span>IDR</span>
                                    <?php
                                if ($ticket == 'vip') {
                            ?>
                            <p>250.000</p>
                            <?php
                                }
                            ?>
                                    <?php
                                if ($ticket == 'premium') {
                            ?>
                            <p>175.000</p>
                            <?php
                                }
                            ?>
                                    <?php
                                if ($ticket == 'general') {
                            ?>
                            <p>100.000</p>
                            <?php
                                }
                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-body">
                            <a class="buy" style="cursor: pointer;" onclick="handleBuyTicket(); return false;">Buy Ticket</a>
                        </div>
                    </div>
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

        <!-- <section id="error-section">
            <div class="error-container">
                <div class="error-wrapper">
                    <h1>Sorry ticket not found</h1>

                    <a href="./index.php">Back to Home</a>
                </div>
            </div>
        </section> -->
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

    <div class="overlay"></div>

    <div class="modal modal-buy">
        <div class="modal-header">
            <p>Please fill in your personal details</p>
            <p class="btn-close-modal">&times;</p>
        </div>

        <div class="modal-body">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="number" name="phone" id="phone" required>
            </div>
            <div class="input-group">
                <label for="nik">ID Number (NIK)</label>
                <input type="number" name="nik" id="nik" required>
            </div>
            <div class="bottom-group">
                <div class="input-group">
                    <label for="bank">Bank</label>
                    <select name="bank" id="bank">
                        <option value="BRI">BRI</option>
                        <option value="MANDIRI">MANDIRI</option>
                        <option value="BNI">BNI</option>
                        <option value="BCA">BCA</option>
                        <option value="CIMB NIAGA">CIMB NIAGA</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="total">Attendance</label>
                    <select name="total" id="total">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn-submit">Submit</button>
        </div>
    </div>

    <script src="./buy.js"></script>
    <script>
        const btnBuy = document.querySelector('.buy');
const btnSubmit = document.querySelector('.btn-submit');
const btnCloseModal = document.querySelector('.btn-close-modal');
const modalBuy = document.querySelector('.modal-buy');
const overlay = document.querySelector('.overlay');

btnBuy.addEventListener('click', () => {
    modalBuy.style.display = 'block';
    overlay.style.display = 'block';
})

btnCloseModal.addEventListener('click', () => {
    modalBuy.style.display = 'none'
    overlay.style.display = 'none'
})
btnSubmit.addEventListener('click', () => {
    modalBuy.style.display = 'none'
    overlay.style.display = 'none'
    window.location.href = './payment.php?id-ticket=<?= $id_ticket ?>'
})
    </script>


    <script>
        function handleBuyTicket() {
        var LoggedIn = <?php echo json_encode($LoggedIn)?>;

        if (!LoggedIn) {
            alert('You must login before buy a ticket!');
            window.location.href = 'pages/login.php';
        } else {

        }
    }
    </script>


        <script>
        function confirmLogout() {
        alert('Are you sure to logout?');
        window.location.href = 'backend/logout.php';
    }
    </script>


</body>
</html>