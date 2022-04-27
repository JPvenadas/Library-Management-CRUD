<?php
    require_once('../Functions.php');
    StudentChanges();
    $students = readStudents();
?>
<!DOCTYPE html>
    <html lang="en">
 <?php include('Header.php') ?>
 <?php include('editModal.php') ?>

 <div class="container p-4">
 <?php include("addModal.php")?>

 <table class="table">
  <thead class="bg-secondary text-light">
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Year Section</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $student){?>
      <tr>
      <td><?php echo $student['StudentID']?></td>
      <td><?php echo $student['StudentName']?></td>
      <td><?php echo $student['YearSection']?></td>
      <td style="display:flex; flex-direction: row">
        
      <Button class="btn text-light bg-primary" data-bs-toggle="modal" data-bs-target="#editStudent" data-bs-whatever="@mdo"
      onclick="
      attachcontent('<?php echo $student['StudentID']?>','<?php echo $student['StudentName']?>','<?php echo $student['YearSection']?>')
      ">
      <i class="bi bi-pen-fill"></i>
      </Button>

        <!-- This is the delete Button -->
        <Form action="Students.php" method="POST">
          <input type="hidden" name="tudentID" value="<?php echo $student['StudentID']?>">
          <Button type="submit" name="DeleteStudent" class="btn mx-1 text-light bg-danger">
            <i class="bi bi-trash2-fill"></i>
          </Button>
        </Form>

      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
 <script>
  const attachcontent= (id, Name, YearSec) => {
    document.getElementById('Update_StudentID').value = id
    document.getElementById('Update_StudentName').value = Name
    document.getElementById('Update_YearSection').value = YearSec
  }
</script>
</body>
</html>