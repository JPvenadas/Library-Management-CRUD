
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
            <input name="BookName" placeholder="Book Name" type="text" class="form-control" id="BookName">
          </div>
          <div class="mb-3">
            <input name="Author" placeholder="Author" type="text" class="form-control" id="Author">
          </div>
          <div class="mb-3">
            <input name="Stocks"  placeholder="Stocks" type="number" class="form-control" id="Stocks">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input name="Add" type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
 