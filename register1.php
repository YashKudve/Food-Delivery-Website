<?php  

//Database ma information leka jata ha 

if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) 
    
    {
    include 'DB_Connect.php';

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $userName= validate($_POST['userName']);
    $password = validate($_POST['password']);
    $cpassword = validate($_POST['cpassword']);

    
   


    // if(empty($email) || empty($name) || empty($password) || empty($number))
    // {
    //     header("Location: connect.html");
    // }
    // else {

    //     $sql = "INSERT INTO test(email,name,gender,password,Number) VALUES('$email','$name','$genderfield1','$password','$number')";
    //     $res = mysqli_query($conn, $sql);

    //     if ($res) {
    //         echo "Your message was sent successfully!";
    //     }
    //     else {
    //         echo "Your message could not be sent!";
    //     }
    // }



$sql = "INSERT INTO registration(`userName`,`email`,`password`,`cpassword`) VALUES('$userName','$email','$password','$cpassword')";
    // if ($password != $cpassword) {
    //     array_push($errors, "The two passwords do not match");
    // }
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "Registration successful!";
        }
        else {
            echo "Registration Unsuccessful";
        }
}
else {
    header("Location: registration.html");
}
?>