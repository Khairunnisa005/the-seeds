$LoggedIn = isset($_SESSION['login']);



function handleBuyTicket() {
    var LoggedIn = '<?php echo json_encode($LoggedIn)';

    if (!LoggedIn) {
        alert('You must login before buy a ticket!');
        window.location.href = '../pages/login.php';
    } else {

    }

}


function confirmLogout() {
    alert('You sure to logout?');
    window.location.href = '../backend/logout.php';
}


