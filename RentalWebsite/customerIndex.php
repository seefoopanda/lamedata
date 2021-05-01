<?php
$title = "Home";
$content = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <h1>Add Customer Form</h1>
</head>
<body>
<form action="insertCustomer.php" method="post">
    <p>
        <label for="Name">L.FirstName:</label>
        <input type="text" name="Name" id="Name">
    </p>
    <p>
        <label for="Phone">Phone Number:</label>
        <input type="text" name="Phone" id="PhoneNumber">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>';

include 'Template.php';
?>