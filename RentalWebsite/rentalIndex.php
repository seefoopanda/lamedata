<?php
$title = "Rental";
$content = '<!DOCTYPE html>
<html lang="en">
<center>
<head>
    <meta charset="UTF-8">
    <h1>Find a rental!</h1>
</head>
<body>
<form action="showRentals.php" method="POST">
    <p>
        <label for="Model">Start date needed?(yyyy-mm-dd):</label>
        <input type="text" name="startDate" id="startDate">
    </p>
    <p>
        <label for="Year">Number of days?:</label>
        <input type="number" name="days" id="days">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</center>
</html>';

include 'Template.php';
?>