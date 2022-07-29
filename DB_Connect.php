<!-- //Creating a connection of data in mysql -->


<?php    
$conn=  mysqli_connect('localhost','root','','food_delivery');
if(!$conn)
{
    echo"connection failed!!!";
    exit();
}
?>