<?php include'header.php' ?>

<button type="button" class="btn btn-primary" onclick="location.href='class.php'">Add Class</button>
<button type="button" class="btn btn-success" onclick="location.href='section.php'">Add Section</button>
<button type="button" class="btn btn-danger" onclick="location.href='subject.php'">Add Subject</button><br><br>

<form action="operation.php" method="POST"  style="height: 1px;">
<div class="input-group" my-2>
  <select name="cls" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
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
  <input type="submit" class="btn btn-outline-secondary" name="clsinput">
</div>
</form>

<?php include'footer.php' ?>