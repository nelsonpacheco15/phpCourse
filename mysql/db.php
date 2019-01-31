<?php
   

   $connection = mysqli_connect('localhost', 'nelson', '1234', 'loginapp');  
    if(!$connection) {
        die("Database connection failed");
    }