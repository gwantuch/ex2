<?php
include_once("classes/class.user.php");
include_once("classes/class.admin.php");
include_once("classes/class.registeredUser.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT313 Exercise 2: OOP </title>
    <h1>CIT313 Exercise 2: OOP </h1>
</head>
<body>

<?php


    $Gordon = new registeredUser("Regular User", "01");
    $Travis = new admin("Administrator", "02");

    $Gordon->firstName = "Harry";
    $Gordon->lastName = "Stanton";
    $Gordon->emailAddress = "hstant@gmail.com";

    $Travis->firstName = "Travis";
    $Travis->lastName = "Henderson";
    $Travis->emailAddress = "then@gmail.com";


    echo($Gordon->echoAttributes());
    echo "<br>";
    echo($Travis->echoAttributes());
?>



</body>
</html>
