<?php include 'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='stud_pers_info1.php'">Student Personal Details</button>
<button type="button" class="btn btn-success" onclick="location.href='student_edu_info1.php'">Student Education Details</button>
<button type="button" class="btn btn-danger" onclick="location.href='student_exam_info1.php'">Student Exam Details</button>
<button type="button" class="btn btn-secondary" onclick="location.href='student_marks_info1.php'">Student Marks Details</button><br><br><br>



<form class="row g-3" style="height: 1px;">


    <div class="col-md-3">
        <label for="inputEmail4" class="form-label">Student Roll No.</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Choose student roll">
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Enter Class</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Class...</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="inputsubject4" class="form-label">Subject Name</label>
        <input type="text" class="form-control" id="inputname2" placeholder="Enter subject name">
    </div>
    <div class="col-md-3">
        <label for="inputState" class="form-label">Exam Type</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Exam Type...</option>
            <option>Half Yearly</option>
            <option>Annually</option>
        </select>
    </div>




    <div class="col-md-6">
        <label for="obmarks" class="form-label">Obtain Marks</label>
        <input type="text" class="form-control" id="inputobmarks">
    </div>
    <div class="col-md-6">
        <label for="totmarks" class="form-label">Total Marks</label>
        <input type="text" class="form-control" id="inputtotmarks">
    </div>




    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>





<?php include 'footer.php' ?>