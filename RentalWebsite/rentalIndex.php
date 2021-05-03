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
        <label for="Year">How long do you need the vehicle?:</label>
        <input type="number" name="days" id="days">
    </p>
    <form id="s" method="post">
<select name="size">
    <option value="days">Days</option>
    <option value="medium">Weeks</option>
    </form>
    <input type="submit" value="Submit">
</form>
</select>


</body>
</center>
</html>';

include 'Template.php';
?>