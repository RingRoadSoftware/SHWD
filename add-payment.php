<?php
//action="add-payment.php" method="POST"

    require_once "inc/dbconn.inc.php";

    $card_name = mysqli_real_escape_string($conn, $_REQUEST['card-name']);
    $card_number = mysqli_real_escape_string($conn, $_REQUEST['card-number']);
    $expiration_date = mysqli_real_escape_string($conn, $_REQUEST['expiration-date']);
    $cvv = mysqli_real_escape_string($conn, $_REQUEST['cvv']);

    $sql = "INSERT INTO paymentInfo(cardName, cardNumber, expirationDate, cvv) VALUES 
    ('$card_name', '$card_number', '$expiration_date', '$cvv');";
    $statement = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($statement, $sql);
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-name']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['card-number']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['expiration-date']));
    mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST['cvv']));

    if (mysqli_stmt_execute($statement)){
        header("location: checkout-shipping.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>