<?php
//    mysql_connect("localhost","vrowold_bryant","tokeitupX1","vrowold_swisslist);

    // echo "{{'address':". $_GET['address1']."},{'stars':". $_GET["rating1"]."}}";
    //mysql_query("INSERT INTO parties VALUES ("123 e 15th","5")");
    // mysql_query("INSERT INTO parties VALUES ($_GET["address1"],$_GET["rating1"])");
//    mysql_query("INSERT INTO parties (address, stars, date_created,date_modified) VALUES ("123 e 15th","5")");

    $con=mysqli_connect("localhost","vrowold_bryant","tokeitupX1","vrowold_swisslist");
    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $address = $_POST['address'];
    $rating = $_POST['rating'];
    $sql="INSERT INTO parties (address, rating, date_created,date_modified)
    VALUES ('$address','$rating',NOW(),NOW())";

    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    echo "1 record added";

    mysqli_close($con);
?>

