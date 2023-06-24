<?php include'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='class.php'">Add Class</button>
<button type="button" class="btn btn-success" onclick="location.href='section.php'">Add Section</button>
<button type="button" class="btn btn-danger" onclick="location.href='subject.php'">Add Subject</button><br><br>

<form action="operation.php" method="POST" style="height: 1px;">
<div class="input-group" my-2>
  <select name="sub" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>Choose Subject...</option>
    <option value="Bengali">Bengali</option>
    <option value="English">English</option>
    <option value="Math">Math</option>
    <option value="History">History</option>
    <option value="Geography">Geography</option>
    <option value="Physical Science">Physical Science</option>
    <option value="Life Science">Life Science</option>
    <option value="Work Education">Work Education</option>
    <option value="Physical Education">Physical Education</option>
    <option value="Computer">Computer</option>
  </select>

  <select name="is_active" class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
      <option selected>Choose Subject Status...</option>
      <option value="yes">yes</option>
      <option value="no">no</option>
    </select>



  <input type="submit" class="btn btn-outline-secondary" name="subinput">
</div>
</form>

<?php include'footer.php' ?>