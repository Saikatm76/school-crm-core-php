<?php include'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='teacher_pers_info.php'">Add Teacher Personal Info</button>
<button type="button" class="btn btn-danger" onclick="location.href='teacher_cls_subject.php'">Add Teacher Class Subject</button><br><br>


<form class="row g-3" style="height: 1px;">



    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Enter Teacher Unique Id</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Enter Unique Id">
    </div>
    <div class="col-md-6">
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
        <label for="inputsubject4" class="form-label">Subject Name</label>
        <input type="text" class="form-control" id="inputname2" placeholder="Enter subject name">
    </div>






   
    <div class="col-md-6">
        <label for="inputState" class="form-label">Is Active</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Status...</option>
            <option>Yes</option>
            <option>No</option>
        </select>
    </div>
    
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>



<?php include 'footer.php' ?>

