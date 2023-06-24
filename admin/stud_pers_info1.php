<?php include 'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='stud_pers_info1.php'">Student Personal Details</button>
<button type="button" class="btn btn-success" onclick="location.href='student_edu_info1.php'">Student Education Details</button>
<button type="button" class="btn btn-danger" onclick="location.href='student_exam_info1.php'">Student Exam Details</button>
<button type="button" class="btn btn-secondary" onclick="location.href='student_marks_info1.php'">Student Marks Details</button><br><br><br>

<div>

<form class="row g-3" style="height: 1px;">
    

<div class="col-md-4">
        <label for="inputEmail4" class="form-label">First Name</label>
        <input type="text" name="fstname" class="form-control" id="inputname1"  placeholder="Enter first name">
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Middle Name</label>
        <input type="text" name="mdlname" class="form-control" id="inputname2" placeholder="Enter middle name">
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Last Name</label>
        <input type="text" name="lstname" class="form-control" id="inputname3" placeholder="Enter Last name">
    </div><br>
    <div class="col-md-3">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="inputgender">
            <option selected>Choose Gender...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>     
        </select>
    </div>
    <div class="col-md-3">
        <label for="dateofBirth" class="form-label">Date of Birth</label>
        <input type="date" name="inputbirth" class="form-control" id="inputbirth">
    </div>
    <div class="col-md-3">
        <label for="dateofJoin" class="form-label">Date of Join</label>
        <input type="date" name="inputjoin" class="form-control" id="inputjoin">
    </div>
    <div class="col-md-3">
        <label for="status" class="form-label">Is Active</label>
        <select id="status" class="form-select" name="status">
            <option selected>Choose Status...</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>    
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary"  type="stperssubmit">Submit</button>
    </div>
</form>

</div>





<?php include 'footer.php' ?>