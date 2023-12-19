<?php


if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = "INSERT INTO user (name, email, password) VALUES (?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)){
        die("SQL error: ". $mysqli->error);
    }

    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $_POST["password"]);

    if ($stmt->execute()){
        echo 'Register Sucessfull <a href="log.html">Click Here To Login</a>';
    }
    else{
        die($mssqli->error. " " . $mysqli->errno);
    }
}

?>
