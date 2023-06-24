<?php include 'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='teacher_pers_info.php'">Add Teacher Personal Info</button>
<button type="button" class="btn btn-danger" onclick="location.href='teacher_cls_subject.php'">Add Teacher Class Subject</button><br><br>


<form class="row g-3" style="height: 1px;">



    <div class="col-md-4">
        <label for="inputEmail4" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputname1" placeholder="Enter first name">
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="inputname2" placeholder="Enter middle name">
    </div>
    <div class="col-md-4">
        <label for="inputPassword4" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="inputname3" placeholder="Enter Last name">
    </div><br>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Gender</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Gender...</option>
            <option>Female</option>
            <option>Male</option>
            <option>Other</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Is Active</label>
        <select id="inputState" class="form-select">
            <option selected>Choose Status...</option>
            <option>Yes</option>
            <option>No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="dateofJoin" class="form-label">Date of Join</label>
        <input type="date" class="form-control" id="inputjoin">
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputemail1" placeholder="Enter Email ID">
    </div>
    <div class="col-md-6">
        <label for="inputcontact4" class="form-label">Contact</label>
        <input type="tel" class="form-control" id="inputcontact1" placeholder="Enter Phone Number">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>



<?php include 'footer.php' ?>