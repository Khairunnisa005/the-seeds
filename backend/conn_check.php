<?php

include "conn.php";

if(isset($_SESSION['login'])) {

} else {
    header('location: ../index.php');
}