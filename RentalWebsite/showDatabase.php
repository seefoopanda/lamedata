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

    <div id="content_area">
        <h1>Printing out our entire database for grading:</h1>
        <?php
        $username = "root";
        $password = "";
        $database = "HW2";
        $mysqli = new mysqli("localhost", $username, $password, $database);

        //Customer database
        $query = "SELECT * FROM customer";

        echo'<h3>Customers</h3>';

        echo '<table border="2" cellspacing="2" cellpadding="2" bgcolor="#dcdcdc"> 
      <tr> 
          <td> <b><font face="Arial">IdNo</font></b> </td> 
          <td> <b><font face="Arial">Name</font></b> </td> 
          <td> <b><font face="Arial">Phone</font></b> </td> 
      </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $customerField1 = $row["IdNo"];
                $customerField2 = $row["Name"];
                $customerField3 = $row["Phone"];

                echo '<tr> 
                  <td>'.$customerField1.'</td> 
                  <td>'.$customerField2.'</td> 
                  <td>'.$customerField3.'</td> 
              </tr>';
            }
            $result->free();
        }

        //car database
        $query = "SELECT * FROM car";

        echo '<table border="2" cellspacing="2" cellpadding="2" bgcolor="#dcdcdc"> 
      <tr> 
          <td> <b><font face="Arial">VehicleID</font></b> </td> 
          <td> <b><font face="Arial">Model</font></b> </td> 
          <td> <b><font face="Arial">Year</font></b> </td> 
          <td> <b><font face="Arial">CarType</font></b> </td> 
          <td> <b><font face="Arial">Available</font></b> </td> 
      </tr>';
        if ($result = $mysqli->query($query)) {
            echo'<h3>All Cars</h3>';
            while ($row = $result->fetch_assoc()) {
                $carField1 = $row["VehicleID"];
                $carField2 = $row["Model"];
                $carField3 = $row["Year"];
                $carField4 = $row["CarType"];
                $carField5 = $row["Available"];

                echo '<tr> 
                  <td>'.$carField1.'</td> 
                  <td>'.$carField2.'</td> 
                  <td>'.$carField3.'</td> 
                  <td>'.$carField4.'</td> 
                  <td>'.$carField5.'</td> 
              </tr>';
            }
            $result->free();
        }


        ?>
    </div>
</div>
</body>
</html>