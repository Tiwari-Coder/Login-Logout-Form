<?php
    include ("connection.php");
    if(isset($_POST['submit'])){
        $username=$_POST['user']; //user data fill krega, tu post se utha le
        $password=$_POST['pass']; //pass fill krega, tu post se utha le

        $sql = "select * from login where username= '$username' and password = '$password'"; 
        //ek select ki query likh
        $result = mysqli_query($conn, $sql); //us query ko ab chala or uska ans result me dal 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);             

           if($count==1){
            header("Location:welcome.php");
           }
           else{
              echo '<script>
                   window.location.href = "index.php";
                   alert("login failed . Invalid username or password !!!")   
              </script>';
           }
        
    
    }



    
?>