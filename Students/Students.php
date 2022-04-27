<?php
    require_once('../Functions.php');
    StudentChanges();
    $students = readStudents();
?>
<!DOCTYPE html>
    <html lang="en">

 <?php include('Header.php') ?>
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
        
      <Button class="btn text-light bg-primary" data-bs-toggle="modal" data-bs-target="#editstudent" data-bs-whatever="@mdo">
      <i class="bi bi-pen-fill"></i>
      </Button>

        <!-- This is the delete Button -->
        <Form action="Students.php" method="POST">
          <input type="hidden" name="studentID" value="<?php echo $student['StudentID']?>">
          <Button type="submit" name="Delete" class="btn mx-1 text-light bg-danger">
            <i class="bi bi-trash2-fill"></i>
          </Button>
        </Form>

      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

 </div>
</body>
</html>