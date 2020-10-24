<?php
    require_once "inc/dbconn.inc.php";

    $id = $_GET['productID'];

    $sql = "UPDATE productInventory SET cart = 1 WHERE productID = " .$id;
    /*$statement = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($statement, $sql);
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_GET["id"]));

    mysqli_stmt_execute($statement);*/

    if (mysqli_query($conn, $sql)){
        header ("location: products.php");
    } else {
        echo "Error: " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>