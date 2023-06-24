<form action="adminlogin.php" method="POST">
  <fieldset>
    <legend>Admin Login</legend>
    <label for="uname">User Name:</label>
    <input type="text" name="uname"><br><br>
    <label for="pass">Password: </label>
    <input type="password" name="pass"><br><br>
    <input type="submit" name="submit"><br><br>
</fieldset>
</form>

<?php include'connection.php' ?>

<?php


if (isset($_POST['submit'])){

    session_start();


$_SESSION['uname']=$_POST['uname'];
$_SESSION['pass']=$_POST['pass'];

$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];


$query="SELECT * FROM admin_t WHERE user='$uname' AND pass='$pass'";
$result=mysqli_query($con,$query);

if (mysqli_num_rows($result)>0){

    header("location:admin/dashboard.php");

}
else{
    echo "<b>wrong ADMIN</b>";

    session_destroy();
}

}

?>
