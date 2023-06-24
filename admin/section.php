<?php include 'connection.php' ?>
<?php include 'header.php' ?>

<?php

$query = "SELECT * FROM tbl_class_info";
$result = mysqli_query($con, $query);

?>

<button type="button" class="btn btn-primary" onclick="location.href='class.php'">Add Class</button>
<button type="button" class="btn btn-success" onclick="location.href='section.php'">Add Section</button>
<button type="button" class="btn btn-danger" onclick="location.href='subject.php'">Add Subject</button><br><br>



<form action="operation.php" method="POST"  style="height: 1px;">
  <div class="input-group" my-2>
    <select name="cls" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">


      <option selected>Choose Class...</option>

      <?php

      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
      ?>

          <option value="<?php echo $row['class_name'] ?>"><?php echo $row['class_name'] ?></option>

      <?php
        }
      }

      ?>

    </select>



    <select name="sec" class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
      <option selected>Choose Section...</option>
      <option value="a">a</option>
      <option value="b">b</option>
      <option value="c">c</option>
    </select>

    <input type="submit" class="btn btn-outline-secondary" name="secinput">
  </div>
</form>

<?php include 'footer.php' ?>