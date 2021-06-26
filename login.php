<?php
session_start();
$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];

$username = validateUser($useremail,$userpassword);

if($username!=""){
    $_SESSION["username"] = $username;
    echo header("Location: shopping.php");
}
else
    echo "Login Failed";

function validateUser($useremail,$userpassword){
    $username = "";
    
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "myshop";
    
    $dbconnection = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    if($dbconnection->error){
        echo "DB CONNECTION FAILED";
    }
    else{
        echo "DB CONNECTION ESTABLISHED <br>";
        $sql = "SELECT * FROM logindata";
        $result = $dbconnection->query($sql);

        while($row = $result->fetch_assoc()){
            if($row["email"]==$useremail && $row["password"]==$userpassword){
                $username = $row["name"];
                break;
            }
        }
    }
    $dbconnection->close();

    return $username;
}
?>