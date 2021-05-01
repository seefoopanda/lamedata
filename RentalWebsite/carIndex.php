<?php
$title = "Home";
$content = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <h1>Add Car Form</h1>
</head>
<body>
<form action="insertCar.php" method="post">
    <p>
        <label for="Model">Model:</label>
        <input type="text" name="Model" id="Model">
    </p>
    <p>
        <label for="Year">Year:</label>
        <input type="number" name="Year" id="Year">
    </p>
    <p>
        <label for="CarType">Type of Car:</label>
        <input type="text" name="CarType" id="Car_Type">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>';

include 'Template.php';
?>