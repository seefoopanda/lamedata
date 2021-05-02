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
            <li><a href="customerIndex.php">Customer</a></li>
            <li><a href="carIndex.php">New Car</a></li>
            <li><a href="showRentals.php">Rentals</a></li>
            <li><a href="showDatabase.php">Database</a></li>
        </ul>
    </nav>
    <div class="sidebar">
        <a class="active" href="index.php">Home</a>
        <a href="https://github.com/Jmansito/CarDatabase.git">GitHub</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
    </div>

    <div id="content_area">
        <h1>All of our available cars are listed below. (note: update when we can choose one that available = true)</h1>
        <?php
        $username = "root";
        $password = "";
        $database = "HW2";
        $mysqli = new mysqli("localhost", $username, $password, $database);

        $query = "SELECT * FROM car";

        echo '<table cellspacing="2" cellpadding="2" > 
      <tr> 
          <td> <b><font face="Arial">VehicleID</font></b> </td> 
          <td> <b><font face="Arial">Model</font></b> </td> 
          <td> <b><font face="Arial">Year</font></b> </td> 
          <td> <b><font face="Arial">CarType</font></b> </td> 
          <td> <b><font face="Arial">Available</font></b> </td> 
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


