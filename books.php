<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$anumber = $_POST['anumber'];
$price = $_POST['price'];
echo "$id"."<br/>";
echo "$name"."<br/>";
echo "$email"."<br/>";
echo "$number"."<br/>";
echo "$anumber"."<br/>";
echo "$price"."<br/>";
$conn = mysqli_connect("localhost","root","","feedbacks");
$sql = "INSERT INTO book VALUES('$id','$name','$email','$number','$anumber','$price')";
if(mysqli_query($conn,$sql))
{
    echo"Database established";
}
else
{
    echo"failed".mysqli_error($conn);
}
mysqli_close($conn);