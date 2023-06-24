<?php include 'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='stud_pers_info1.php'">Student Personal Details</button>
<button type="button" class="btn btn-success" onclick="location.href='student_edu_info1.php'">Student Education Details</button>
<button type="button" class="btn btn-danger" onclick="location.href='student_exam_info1.php'">Student Exam Details</button>
<button type="button" class="btn btn-secondary" onclick="location.href='student_marks_info1.php'">Student Marks Details</button><br><br>





<form class="row g-3 my-2" style="height: 1px;">

    <div class="col-md-4">
        <label for="inputRoll4" class="form-label">Choose Roll No.</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Enter roll no.">
    </div>
    <div class="col-md-4">
        <label for="inputSubject4" class="form-label">Choose Subject Name</label>
        <input type="text" class="form-control" id="inputname2" placeholder="Enter Subject Name">
    </div>

    <div class="col-md-4">
        <label for="inputState" class="form-label">Choose Class</label>
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

    

    <div class="col-md-6">
        <label for="inputState" class="form-label">Exam Type</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Exam Type...</option>
            <option>Half Yearly</option>
            <option>Annually</option>
        </select>
    </div>

    
    <div class="col-md-6">
        <label for="dateofExam" class="form-label">Date of Exam</label>
        <input type="date" class="form-control" id="inputexam">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Exam Marks Obtain</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Enter obtain number">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Exam Total Marks</label>
        <input type="text" class="form-control" id="inputname2" placeholder="Enter total number">
    </div>


    


    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php include 'footer.php' ?>