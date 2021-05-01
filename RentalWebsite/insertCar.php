<!DOCTYPE html>
<html>

<head>
    <title>Car Insert Page</title>
</head>

<body>
<center>
    <?php
    include 'carIndex.php';
    $conn = mysqli_connect("localhost", "root", "", "HW2");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $VehicleID = 0;
    $Model = $_REQUEST['Model'];
    $Year = $_REQUEST['Year'];
    $CarType = $_REQUEST['CarType'];
    $Available = "";


    $sql = "INSERT INTO car VALUES (NULL,
			'$Model','$Year','$CarType',Null)";

    if(mysqli_query($conn, $sql)){
        echo "<h3>Car info stored successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n $Model\n "
            . "$Year\n $CarType\n" );
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>