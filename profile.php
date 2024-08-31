<?php


include "backend/conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        h2 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .history-payment table {
            align-items: center;
            justify-content: center;
            margin: auto;
            border-radius: 10px;
        }
        .history-payment table tr {
            border-radius: 10px;
        }


    </style>
</head>
<body>
    <div class="history-payment">
        <h2>History Payment Ticket <u>Khairunnisa</u></h2>
        <table border="1" cellspacing="0" cellpadding="10">
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
        <tr>
            <td>1. </td>
            <td>Rizky Eka Ramadhan</td>
            <td>The Seeds - Regular</td>
            <td>3</td>
            <td>11/8/2024</td>
            <td>Rp170.000</td>
            <td>Rp2.500</td>
            <td>Rp172.500</td>
            <td>BCA</td>
            <td>Succes</td>
        </tr>
    </table>
    </div>
    
</body>
</html>