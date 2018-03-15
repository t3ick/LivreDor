<?php
/**
 * Created by PhpStorm.
 * User: TriNgo
 * Date: 08/03/2018
 * Time: 11:32
 */
function MY_Help_helper(){

    $servername = "mysql57";
    $username = "root";
    $password = "Ni5ssfrpZrZ7XRM5dCJkF3Yb898qKEU";
// Create connection
    $conn = mysqli_connect($servername, $username, $password);
// Check connection
    if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}
