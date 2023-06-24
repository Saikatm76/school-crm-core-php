<?php
$con=mysqli_connect('localhost','root','root','school_crm');
if(mysqli_connect_errno()){
    echo "failed to connect mysql: ".mysqli_connect_error();
    exit();
}
?>