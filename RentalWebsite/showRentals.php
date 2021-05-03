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
        $rentalPeriod = $_REQUEST['period'];
        $dayOrWeek = $_POST['dayOrWeek'];
        $periodConvert = strval( $rentalPeriod);
        $tempReturnDate = '2020-05-05';

        //days
        if($dayOrWeek == 'days') {

            // $calculatedDayReturn = date('Y-m-d', strtotime($startDate. + $periodConvert));
            //  echo($calculatedDayReturn);

            $query = "SELECT C.VehicleID, C.Model, C.Year, C.CarType 
FROM car AS C 
LEFT OUTER JOIN rental R ON C.VehicleID = R.VehicleID
WHERE NOT((date '$startDate' <= R.ActualReturnDate) AND (R.StartDate <= date '$tempReturnDate')) OR (R.StartDate IS NULL)";

            echo '<h3>Available Daily Cars to Rent</h3>';
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
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
              </tr>';
                }
                $result->free();
            }
            echo'<!DOCTYPE html>
<html lang="en">
<center>
<head>
    <meta charset="UTF-8">
    <h3>Please enter the VehicleID of the vehicle you would like to rent</h3>
</head>
<body>
<form action="selectRental.php" method="POST">
    <p>
        <label for="Model">VehicleID:</label>
        <input type="text" name="VID" id="VID">
        </form>
    <input type="submit" value="Submit">
</form>
    </p>
    
</body>
</center>
</html>';
        }
        //weeks
        if($dayOrWeek == 'weeks') {

            // $calculatedWeekReturn = date('Y-m-d', strtotime($startDate. + $periodConvert));
            //  echo($calculatedWeekReturn);

            $query = "SELECT C.VehicleID, C.Model, C.Year, C.CarType 
FROM car AS C 
LEFT OUTER JOIN rental R ON C.VehicleID = R.VehicleID
WHERE NOT((date '$startDate' <= R.ActualReturnDate) AND (R.StartDate <= date '$tempReturnDate')) OR (R.StartDate IS NULL)";

            echo '<h3>Available Weekly Cars to Rent</h3>';
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
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
              </tr>';
                }
                $result->free();
            }
            echo'<!DOCTYPE html>
<html lang="en">
<center>
<head>
    <meta charset="UTF-8">
    <h3>Please enter the VehicleID of the vehicle you would like to rent</h3>
</head>
<body>
<form action="selectRental.php" method="POST">
    <p>
        <label for="Model">VehicleID:</label>
        <input type="text" name="VID" id="VID">
        </form>
    <input type="submit" value="Submit">
</form>
    </p>
    
</body>
</center>
</html>';
        }
        ?>
</center>
</body>

</html>


