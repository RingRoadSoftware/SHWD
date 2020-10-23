<?php
//action="add-shipping.php" method="POST"
    /*if (isset($_POST["first-name"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(fName) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["first-name"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["last-name"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(lName) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["last-name"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["mobile-number"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(mobileNo) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["mobile-number"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["address"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(address) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["address"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["zipcode"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(zipcode) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["zipcode"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }

    if (isset($_POST["company"])){
        require_once "inc/dbconn.inc.php";

       $sql = "INSERT INTO customerInfo(company) VALUES(?);";
       $statement = mysqli_stmt_init($conn);

       mysqli_stmt_prepare($statement, $sql);
       mysqli_stmt_bind_param($statement, 's', htmlspecialchars($_POST["company"]));
       if (mysqli_stmt_execute($statement)){
           header("location: checkout-confirmed.php");
       } else{
           mysqli_error($conn);
       }
    }*/

    require_once "inc/dbconn.inc.php";

    $first_name = mysqli_real_escape_string($conn, $_REQUEST['first-name']);
    $last_name = mysqli_real_escape_string($conn, $_REQUEST['last-name']);
    $mobile_number = mysqli_real_escape_string($conn, $_REQUEST['mobile-number']);
    $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
    $zipcode = mysqli_real_escape_string($conn, $_REQUEST['zipcode']);
    $company = mysqli_real_escape_string($conn, $_REQUEST['company']);

    $sql = "INSERT INTO shippingInfo(fName, lName, mobileNo, address, zipcode, company) VALUES 
    ('$first_name', '$last_name', '$mobile_number', '$address', '$zipcode', '$company');";

    if (mysqli_query($conn, $sql)){
        header("location: checkout-confirmed.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);

?>