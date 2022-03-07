<?php
$username = $_SESSION['login'];
$db = mysqli_connect("localhost","root","","personalpage");
$sql = "SELECT firstname,lastname,id,image FROM users where username = '$username'";
$result = mysqli_query($db,$sql);


while($row = mysqli_fetch_array($result)) 
{
    $f_name= $row ['firstname'];
    $l_name =$row['lastname'];
    $var1=$row['id'];
    $varimage=$row['image'];

}
?>