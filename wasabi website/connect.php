<!--  File Created By Collin Ardoin-->
<!--  Edited by Matthew Foreman @ 11-23-2022-->

<!--  File is necessary to submit form properly for reservations-->

<?php
    $dbhost = "sql9.freesqldatabase.com";
    $dbuser = "sql9580202";
    $dbpass = "TYpymQBFpf";
    $db = "sql9580202";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

    $CustName = $_REQUEST['customerName'];
    $CustPhone = $_REQUEST['customerPhone'];
    $ResSize = $_REQUEST['numberPeople'];
    $ResDate = $_REQUEST['reserveDate'];
    $ResTime = $_REQUEST['reserveTime'];

    
    if($conn->connect_error)
    {
        die('Connection Failed: '.$conn->connect_error);
    }
    else
    {
        echo"";
    }
    $sql = "INSERT INTO reservations VALUES ('$CustName', '$CustPhone', '$ResSize', '$ResDate', '$ResTime')";
    if(mysqli_query($conn, $sql)){
        header('Location: ReservationSuccess.html');
        exit();
        
    } else{
        echo "ERROR: Reservation unsuccessful."
            . mysqli_error($conn);
    }
    mysqli_close($conn);
?>