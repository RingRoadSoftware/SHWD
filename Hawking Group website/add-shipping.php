<?php
//action="add-shipping.php" method="POST"

    require_once "inc/dbconny.inc.php";

    $first_name = mysqli_real_escape_string($conn, $_REQUEST['first-name']);
    $last_name = mysqli_real_escape_string($conn, $_REQUEST['last-name']);
    $mobile_number = mysqli_real_escape_string($conn, $_REQUEST['mobile-number']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $zipcode = mysqli_real_escape_string($conn, $_REQUEST['zipcode']);
    $company = mysqli_real_escape_string($conn, $_REQUEST['company']);

    $sql = "INSERT INTO shippingInfo(fName, lName, mobileNo, address, zipcode, company) VALUES 
    ('$first_name', '$last_name', '$mobile_number', '$address', '$zipcode', '$company');";
    $statement = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($statement, $sql);
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));

    if (mysqli_stmt_execute($statement)){
        header("location: checkout-confirmed.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>