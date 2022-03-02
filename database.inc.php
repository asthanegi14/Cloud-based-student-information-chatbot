<?php
    //set connection variables
    $server="localhost";
    $username="root";
    $password="";
    $database="chatbot";

    //creaste a database connection
    $con=mysqli_connect($server, $username, $password,$database);
    

    //check for connection success
    if(!$con)
    {
        die("\nConnection failed due to ".mysqli_connect_error());
    }
  
?>