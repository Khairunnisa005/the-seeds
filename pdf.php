<?php

$id_ticket = $_GET['id-ticket'] ?? '';

if ($id_ticket == null) {
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
    <style>
        @font-face {
    font-family: "Poppins";
    src: url('./assets/fonts/Poppins-Regular.ttf');
}
@font-face {
    font-family: "Poppins-Medium";
    src: url('./assets/fonts/Poppins-Medium.ttf');
}
@font-face {
    font-family: "Poppins-SemiBold";
    src: url('./assets/fonts/Poppins-SemiBold.ttf');
}
@font-face {
    font-family: "Poppins-Bold";
    src: url('./assets/fonts/Poppins-Bold.ttf');
}
@font-face {
    font-family: "NewRocker";
    src: url('./assets/fonts/NewRocker-Regular.ttf');
}

.loader {
    width: 100%;
    height: 100%;
    background-color: var(--dark);
    position: fixed;
    z-index: 110;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    animation: loaderScreen 0.8s 2.2s forwards;
}

.loader-text {
    display: flex;
    letter-spacing: 4px;
    font-size: 40px;
    color: var(--white);
}

.loader-text span {
    font-family: "Poppins-Bold";
    animation: loaderText 0.3s forwards;
    opacity: 0;
    transform: translateY(40px);
}

.loader-image {
    width: 400px;
    animation: loaderImage 0.3s 1.7s forwards;
    margin-top: 30px;
    opacity: 0;
    transform: translateX(-40px);
}

@keyframes loaderScreen {
    to {
        bottom: 100%;
        opacity: 0;
    }
}

@keyframes loaderText {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    50% {
        opacity: 0.5;
    }
    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}

@keyframes loaderImage {
    100% {
        opacity: 1;
        transform: translateX(0px);
    }
}

:root {
    --white: #FFFFFF;
--black: #000000;
--dark: #252525;
--gray: #646262;
--lightgreen: #80FFDB;
--cyan: #64DFDF;
--purple: #6930C3;
--yellow: #FFC229;
--pink: #FF78C4;
--green: #6CEE73;
--black-transparent: rgba(0, 0, 0, 0.8);
--cyan-transparent: rgba(100, 223, 223, 0.8);
--dark-transparent: rgba(15, 15, 16, 0.8);
--white-transparent: rgba(255, 255, 255, 0.8);
--purple-transparent: rgba(105, 48, 195, 0.8);
}

html {
    scroll-behavior: smooth;
}

@media print {
    body {
        -webkit-print-color-adjust: exact;
    }
}

* {
    padding: 0;
    margin: 0;
    font-family: "Poppins";
    box-sizing: border-box;
}

.tickets-wrapper {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

.tickets-card {
    position: relative;
    width: 200px;
    overflow: hidden;
    z-index: 1;
}

.tickets-card::after,
.tickets-card::before {
    content: "";
    position: absolute;
    top: calc(85% - 65px);
    width: 60px;
    height: 60px;
    background-color: var(--white);
    z-index: 3;
    border-radius: 50%;
}

.tickets-card::before {
    left: -40px;
}
.tickets-card::after {
    right: -40px;
}

.tickets-header {
    position: relative;
    background-image: url('./assets/images/tickets.png');
    background-position: center;
    background-size: cover;
    z-index: 1;
}

.tickets-header::before {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
}

.tickets-content {
    width: 100%;
    padding: 10px;
    color: var(--white);
    position: relative;
    z-index: 2;
    text-align: center;
}

.tickets-title {
    padding-top: 10px;
    margin-bottom: 10px;
}

.tickets-title p {
    font-size: 16px;
    font-family: "Poppins-SemiBold";
}
.tickets-title p:nth-child(2) {
    font-size: 12px;
    font-family: "Poppins";
}

.tickets-date {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
}

.tickets-date p:nth-child(2) {
    font-family: "Poppins-SemiBold";
    font-size: 20px;
}

.tickets-logo {
    margin: 20px 0px;
}

.tickets-logo img {
    width: 200px;
}

.tickets-type {
    margin-bottom: 20px;
}

.tickets-type p {
    font-size: 30px;
    color: var(--yellow);
    text-shadow: 0px 0px 10px var(--yellow);
    font-family: "Poppins-Bold";
}

.tickets-price {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    color: var(--pink);
}

.tickets-price span {
    position: relative;
    top: 5px;
    font-size: 14px;
    font-family: "Poppins-Bold";
}
.tickets-price p {
    font-size: 30px;
    font-family: "Poppins-Bold";
}

.tickets-body {
    width: 100%;
    height: 90px;
    display: flex;
    flex-direction: column;
    color: var(--white);
    gap: 5px;
    align-items: center;
    justify-content: center;
    border-top: 3px dotted var(--white);
    background-color: var(--purple);
}
    </style>
</head>
<body>
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
                        <p>ID Ticket: <?= $id_ticket ?></p>
                        <p>Khairunnisa | 19:00</p>
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
                        <p>ID Ticket: <?= $id_ticket ?></p>
                        <p>Khairunnisa | 19:00</p>
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
                            <p>ID Ticket: <?= $id_ticket ?></p>
                            <p>Khairunnisa | 19:00</p>
                        </div>
                    </div>
                </div>

                <div class="" style="border-top: 1px dotted black; margin: 20px;"></div>

                <div class="" style="display: flex; justify-content: space-between">
                    <div class="text">
                        <p>
                        Hi Khairunnisa, here are some important information you need to know: <br>
                        <br>
Date & Time : Saturday, August 31st | 9 PM<br>
Location        : Kampung Jackloth, Slamet Riyadi street, Jember<br>
Ticket             : Make sure you bring your physical ticket or e-ticket.<br>
<br>
Guidelines:<br>
Please bring your KTP or other valid ID for verification.<br>
No prohibited items such as weapons, alcohol, or illegal drugs are allowed.<br>
Enjoy the concert while respecting other visitors.<br>
<br>
Services & Facilities:<br>
Food court and merchandise are available in the concert area.<br>
Parking area is in the backyard.<br>
<br>
Doors will open at 7 PM. We recommend arriving early to avoid long queues.<br>
<br>
See you at the concert, and let's create unforgettable memories together!<br>
Warm Regards, Concert Organizer Team.
                        </p>
                    </div>

                    <div class="qr" style="display: flex; align-items: end;">
                        <div id="qr">

                        </div>
                    </div>
                </div>

        <script src="./Libraries/QR-Code/qrcode.min.js"></script>
        <script>

            const qr = document.getElementById('qr');

            new QRCode(qr, {
                text: '<?= $id_ticket ?>',
                width: 128,
                height: 128
            })
        </script>
</body>
</html>