<?php

    require_once "inc/dbconn.inc.php";

    $sql = "UPDATE paymentInfo SET active = 1 WHERE active = 0";
    $sql2 = "UPDATE shippingInfo SET active = 1 WHERE active = 0";

    mysqli_query($conn, $sql);

    /*if(!$reset1) {
        echo "Error: " .mysqli_error($conn);
    }*/

    if (mysqli_query($conn, $sql2)){
        header("location: index.php");
    } else {
        echo "Error: " .mysqli_error($conn);
    }

    mysqli_close($conn)

?>