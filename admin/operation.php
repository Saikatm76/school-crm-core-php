<?php include 'connection.php'; ?>

<?php

if (isset($_POST['clsinput'])) {
    $cls = $_POST['cls'];
    $query = "INSERT INTO tbl_class_info(class_name) VALUES('$cls')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo 'new record created';
    } else {

        echo "not";
    }
}







if (isset($_POST['secinput'])) {


    $cls = $_POST['cls'];
    $sec = $_POST['sec'];

    $query = "INSERT INTO tbl_section_info(class_name,section_name) VALUES('$cls','$sec')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo 'new record created';
    } else {

        echo "not";
    }
}








if (isset($_POST['subinput'])) {


    $sub = $_POST['sub'];
    $is_active = $_POST['is_active'];

    $query = "INSERT INTO tbl_subject_info(sub_name,is_active) VALUES('$sub','$is_active')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo 'new record created';
    } else {

        echo "not";
    }
}






if (isset($_POST['stperssubmit'])) {


    $fstname = $_POST['fstname'];
    $mdlname = $_POST['mdlname'];
    $lstname = $_POST['lstname'];
    $inputgender = $_POST['inputgender'];
    $inputbirth = date('Y-m-d',strtotime($_POST['inputbirth']));
    $inputjoin = $_POST['inputjoin'];
    $status = $_POST['status'];

    $query = "INSERT INTO tbl_stud_pers_info(first_name,middle_name,last_name,gender,dob,date_of_join,is_active) VALUES('$fstname','$mdlname','$lstname','$inputgender','$inputbirth','$inputjoin','$status')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo 'new record created';
    } else {

        echo "not";
    }
}



?>
