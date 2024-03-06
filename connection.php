<?php
  $conn=mysqli_connect('localhost','root','','database1');

    if($conn->connect_error){
        die("Connection Faild" .$conn->connect_error);
    }
    echo "";
                
  
?>