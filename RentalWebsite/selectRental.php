<!DOCTYPE html>
<html>

<head>
    <title>Car Insert Page</title>
</head>

<body>
<center>
    <?php
    include 'showRentals.php';
    $conn = mysqli_connect("localhost", "root", "", "HW2");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }


    $VID = $_REQUEST['VID'];


//update query goes here.
    /*
    $sql =

    if(mysqli_query($conn, $sql)){
        echo "<h3>Your rental has been reserved!"
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n $Model\n "
            . "$Year\n $CarType\n" );
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    */

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>