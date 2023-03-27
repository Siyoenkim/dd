<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youBirth = $_POST['youBirth'];
    $youAge = $_POST['youAge'];
    $regTime = time();

    // echo $youEmail, $youPass, $youName, $youBirth, $youAge;

    $sql = "INSERT INTO members(youEmail, youPass, youName, youBirth, youAge, regTime) VALUES('$youEmail','$youPass','$youName','$youBirth','$youAge', '$regTime')";
    $connect -> query($sql);

    Header("Location:../sample/sample01.php");
?>