<?php
 require_once('Functions.php');
 UpdateBook();
 addbook();
 deleteBook();
 $conn = Opencon();
 $command = "select * from TBL_books";
 $result = mysqli_query($conn, $command);
 $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
 mysqli_close($conn)
?>
<!DOCTYPE html>
<html lang="en">
 <?php include('Books/header.php') ?>
 <?php require("Books/editModal.php")?>
 <div class="container p-4">
 <?php include('Books/addModal.php')?>
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
      <td style="display:flex; flex-direction: row">
        
      <Button class="btn text-light bg-primary" data-bs-toggle="modal" data-bs-target="#editBook" data-bs-whatever="@mdo"
      onclick="attachcontent('<?php echo $book['BookID']?>','<?php echo $book['BookName']?>','<?php echo $book['Author']?>','<?php echo $book['Stocks']?>')">
      <i class="bi bi-pen-fill"></i>
      </Button>

        <!-- This is the delete Button -->
        <Form action="index.php" method="POST">
          <input type="hidden" name="BookID" value="<?php echo $book['BookID']?>">
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

<script>
  const attachcontent= (id, Name, Author, Stocks) => {
    document.getElementById('Update_BookID').value = id
    document.getElementById('Update_BookName').value = Name
    document.getElementById('Update_Author').value = Author
    document.getElementById('Update_Stocks').value = Stocks
  }
</script>
</body>
</html>