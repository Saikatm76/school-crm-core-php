<?php include 'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='stud_pers_info1.php'">Student Personal Details</button>
<button type="button" class="btn btn-success" onclick="location.href='student_edu_info1.php'">Student Education Details</button>
<button type="button" class="btn btn-danger" onclick="location.href='student_exam_info1.php'">Student Exam Details</button>
<button type="button" class="btn btn-secondary" onclick="location.href='student_marks_info1.php'">Student Marks Details</button><br><br>



<form class="row g-3 my-2" style="height: 1px;">


    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Choose Student unique Id</label>
        <input type="text" class="form-control" id="inputid1" placeholder="Enter unique id">
    </div>

    <div class="col-md-6">
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





    <div class="col-md-4">
        <label for="inputRoll4" class="form-label">Roll No.</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Enter roll no.">
    </div>

    <div class="col-md-4">
        <label for="date" class="form-label">Year of Join</label>
        <input type="date" class="form-control" id="datepicker">
    </div>

    <div class="col-md-4">
        <label for="inputState" class="form-label">Gender</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Last Year Exam Status...</option>
            <option>pass</option>
            <option>fail</option>
            <option>new_stud</option>
        </select>
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>





<?php include 'footer.php' ?>