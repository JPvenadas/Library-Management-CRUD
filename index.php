<?php
 require_once('Books/Functions.php');
 addbook();
 $conn = Opencon();
 $command = "select * from TBL_books";
 $result = mysqli_query($conn, $command);
 $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
 mysqli_close($conn)
?>
<!DOCTYPE html>
<html lang="en">
 <?php include('Books/header.php') ?>
 <div class="container p-4">
 <?php include('Books/modal.php')?>
 <table class="table">
  <thead class="bg-secondary text-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Book Author</th>
      <th scope="col">Book Stocks</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($books as $book){?>
      <tr>
      <td><?php echo $book['BookID']?></td>
      <td><?php echo $book['BookName']?></td>
      <td><?php echo $book['Author']?></td>
      <td><?php echo $book['Stocks']?></td>
      <td>
        <Button class="btn text-light bg-primary"><i class="bi bi-trash2-fill"></i></Button>
        <Button class="btn text-light bg-danger"><i class="bi bi-pen-fill"></i></Button>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>

</div>
</body>
</html>