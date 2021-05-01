<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Rentals</title>
    <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
</head>
<body>
<div id="wrapper">
    <div id="banner">
    </div>

    <nav id="navigation">
        <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="customerIndex.php">New Customer</a></li>
            <li><a href="carIndex.php">Add Car</a></li>
            <li><a href="showRentals.php">Rentals</a></li>
        </ul>
    </nav>

    <div id="content_area">
        <h1>This is currently just showing cars, can update to rentals if needed. Thought was
        to use the car table to show available cars?</h1>
        <?php
        $username = "root";
        $password = "";
        $database = "HW2";
        $mysqli = new mysqli("localhost", $username, $password, $database);

        $query = "SELECT * FROM car";

        echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">VehicleID</font> </td> 
          <td> <font face="Arial">Model</font> </td> 
          <td> <font face="Arial">Year</font> </td> 
          <td> <font face="Arial">CarType</font> </td> 
          <td> <font face="Arial">Available</font> </td> 
      </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["VehicleID"];
                $field2name = $row["Model"];
                $field3name = $row["Year"];
                $field4name = $row["CarType"];
                $field5name = $row["Available"];

                echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
            }
            $result->free();
        }
        ?>
    </div>
</div>
</body>
</html>

