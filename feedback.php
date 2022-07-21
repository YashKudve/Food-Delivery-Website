<?php  

 

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) 
    
    {
    include 'DB_Connect.php';

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $name = validate($_POST['name']);
    $email= validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $message = validate($_POST['message']);

   
   


   



$sql = "INSERT INTO feedback(`name`,`email`,`phone`,`message`) VALUES('$name','$email','$phone','$message')";
        $res = mysqli_query($conn, $sql);

        if ($res && conf==true) {
            echo "Feedback Submitted!";
        }
        else {
            echo "Submission Error";
        }
}
else {
    header("Location: Project.html");
}
?>