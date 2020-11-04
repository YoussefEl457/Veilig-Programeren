<?php

include "db.php";

$username = $_POST["Username"];
$password = $_POST["Password"];

print $username;
print $password;



$myConn = new DB;


$query = "SELECT * FROM user WHERE username" = $_POST["Username"];

$result = $myConn->executeSQL($query);

gettype($result);

if (!empty($result)) {
    echo "<br> Login as $username <br>";
    //Het laat info zien dat is opgeslagen in de variable.
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>
