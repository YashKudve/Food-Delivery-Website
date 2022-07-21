<?php  

 

if (isset($_POST['Name']) && isset($_POST['Address']) && isset($_POST['Pincode']) && isset($_POST['Contact']) && isset($_POST['Email'])) 
    
    {
    include 'DB_Connect.php';

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $Name = validate($_POST['Name']);
    $Address= validate($_POST['Address']);
    $Pincode = validate($_POST['Pincode']);
    $Contact = validate($_POST['Contact']);
    $Email = validate($_POST['Email']);
   


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



$sql = "INSERT INTO cust_detail(`Name`,`Address`,`Pincode`,`Contact`,`Email`) VALUES('$Name','$Address','$Pincode','$Contact','$Email')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "Details Submitted!";
        }
        else {
            echo "Error";
        }
}
else {
    header("Location: Project.html");
}
?>