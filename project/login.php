<?php
if(isset($_POST['submit1']))
{
    $conn = mysqli_connect('localhost', 'root', '', 'dropout');
echo"hiii";
if($conn){
echo "<script>alert('error in database connection);</script>";
}
 $index_id=$_POST['index_id'];
$password=$_POST['password'];

 $query="SELECT * from school WHERE index_id like ('$index_id') and password like ('$password')";

$result= mysqli_query($conn, $query) or die(mysqli_error($conn));

$count = mysqli_num_rows($result);
echo $count; 
if($count >= 1)
{
$_SESSION['logindatabase']='true';
header('location: standard.php');
}
else{
echo "worng username or password";
}}
?>