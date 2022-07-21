


<!-- Not used -->

<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";

$database = "registration";
    $connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['Submit'])){
   

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $query = "INSERT INTO `users`(`userName`,`email`,`password`,`cpassword`) VALUES('$userName','$email','$password','$cpassword')";

    $result = mysqli_query($connect,$query);

    if($result){
    echo "You have successfully registered";

    }
    else{
    echo "Registration failed !";  

    }
}
//Database Connection
?>