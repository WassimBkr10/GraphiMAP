<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'login');
    // fetch file to download from database
    $sql = "SELECT * FROM accounts WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);


}

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'login');

$sql = "SELECT * FROM accounts";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    }







?>