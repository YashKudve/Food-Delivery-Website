<!-- //Creating a connection of data in mysql -->


<?php    
$conn=  mysqli_connect('localhost','root','','feedback');
if(!$conn)
{
    echo"connection failed!!!";
    exit();
}
?>