<?php
$username = $_POST["username"];
$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];

$saved = saveUser($username,$useremail,$userpassword);

if($saved){
    echo "Registration Done";
}
else{
    echo "Registration Failed";
}

function saveUser($username,$useremail,$userpassword){

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
        $sql = "INSERT INTO logindata(name, email, password) VALUES ('".$username."','".$useremail."','".$userpassword."')";
        if($dbconnection->query($sql)===TRUE){
            return true;
        }
    }
    return false;
}
?>