<!DOCTYPE html>
<html>

<head>
    <title>Get Rentals</title>
</head>

<body>
<center>
        <?php
        include 'rentalIndex.php';

        $username = "root";
        $password = "";
        $database = "HW2";
        $mysqli = new mysqli("localhost", $username, $password, $database);

        $startDate = $_REQUEST['startDate'];
        $day = $_REQUEST['days'];
        $dayOrWeek = $_POST['dayOrWeek'];
        $dayConvert = strval( $day);
        $calculatedReturn = date('Y-m-d', strtotime($startDate. + $dayConvert));
        echo($calculatedReturn);

        $query = "SELECT C.VehicleID, C.Model, C.Year, C.CarType 
FROM car AS C 
LEFT OUTER JOIN rental R ON C.VehicleID = R.VehicleID
WHERE NOT((date '$startDate' <= R.ActualReturnDate) AND (R.StartDate <= date '$calculatedReturn')) OR (R.StartDate IS NULL)";

        echo'<h3>Available Cars to Rent</h3>';
        echo '<table cellspacing="2" cellpadding="2" > 
      <tr> 
          <td> <b><font face="Arial">VehicleID</font></b> </td> 
          <td> <b><font face="Arial">Model</font></b> </td> 
          <td> <b><font face="Arial">Year</font></b> </td> 
          <td> <b><font face="Arial">CarType</font></b> </td> 
      </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $field1name = $row["VehicleID"];
                $field2name = $row["Model"];
                $field3name = $row["Year"];
                $field4name = $row["CarType"];

                echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
            }
            $result->free();
        }
        ?>
</center>
</body>

</html>


