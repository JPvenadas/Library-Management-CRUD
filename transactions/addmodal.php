<button type="button" class=" mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBook" data-bs-whatever="@mdo">+ Add Book</button>

<div class="modal fade" id="addBook" tabindex="-1" aria-labelledby="addBookLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookLabel">Add a Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
          <div class="mb-3">
            <input required name="BookName" list="Students" placeholder="Book Name" type="text" class="form-control" id="BookName" autocomplete="off">
            <datalist id="Students">
              <?php foreach($students as $Student){?>
                <option value="<?php echo $Student['StudentID']?>"><?php echo $Student['StudentName']?></option>
               <?php }?>
           </datalist>
          </div>
          <div class="mb-3">
            <input required name="BookName" list="Books" placeholder="Book Name" type="text" class="form-control" id="BookName" autocomplete="off">
            <datalist id="Books">
              <?php foreach($books as $book){?>
                <option value="<?php echo $book['BookID']?>"><?php echo $book['BookName']?></option>
               <?php }?>
           </datalist>
          </div>
          <div class="mb-3">
            <input required name="Date" type="date" class="form-control" id="date">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input required name="Add" type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>