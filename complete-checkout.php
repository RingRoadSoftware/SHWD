<?php

    require_once "inc/dbconn.inc.php";

    $sql = "UPDATE paymentInfo SET active = 1 WHERE active = 0";
    $sql2 = "UPDATE shippingInfo SET active = 1 WHERE active = 0";
    $sql3 = "UPDATE productInventory SET cart = 0 WHERE cart = 1";
    $statement = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($statement, $sql);
    mysqli_stmt_execute($statement);

    mysqli_stmt_prepare($statement, $sql2);
    mysqli_stmt_execute($statement);

    mysqli_stmt_prepare($statement, $sql3);
    if (mysqli_stmt_execute($statement)){
        header("location: index.php");
    } else {
        echo "Error: " .mysqli_error($conn);
    }

    mysqli_close($conn);

?>