<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="#" onclick="confirmLogout(); return false;">LOGOUT</a>
        <script>
            function confirmLogout() {
    alert('You sure to logout?');
    window.location.href = 'backend/logout.php';
}
        </script>
</body>
</html>