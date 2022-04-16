<?php
$conn = mysqli_connect('127.0.0.2:3307','root','','db_library');
$command = "select * from TBL_books";
$res = mysqli_query($conn, $command);
$books = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
 <?php include('header.php') ?>
 <div class="container p-4">
 <?php include('addBook.php')?>
    <table class="table">
  <thead class="bg-secondary text-light">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Book Author</th>
      <th scope="col">Book Stocks</th>
      <th  scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($books as $book){?>
    <tr >
      <td><?php echo $book['BookID']?></td>
      <td><?php echo $book['BookName']?></td>
      <td><?php echo $book['Author']?></td>
      <td><?php echo $book['Stocks']?></td>
      <td>
          <Button OnClick=<?php echo "Hello"?> class="btn btn-primary"><i class="bi bi-pen-fill"></i></Button>
          <Button class="btn btn-danger"><i class="bi bi-trash2-fill"></i></Button>
    </td>
    </tr> 
   <?php } ?>
  </tbody>
</table>
</div>
 </div>
</body>
</html>