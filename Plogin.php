<?php
session_start();
include 'dbh.php';

$username = $_POST['mail'];
$password = $_POST['pass'];

$sql = "SELECT * FROM user1 WHERE username = '$username' AND passwd = '$password'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
    // Incorrect username or password
    echo "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin-top: 50px;
                background-color: #f9f9f9;
            }
            .error-message {
                color: red;
                font-weight: bold;
                margin-bottom: 20px;
            }
            .sign-in-again {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                color: white;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
            }
            .sign-in-again:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='error-message'>Incorrect username or password</div>
        <a href='index.php' class='sign-in-again'>Sign In Again</a>
    </body>
    </html>
    ";
} else {
    $_SESSION['id'] = $row['id'];
    header("Location: homepage.php");
}
?>