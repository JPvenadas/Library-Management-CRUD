<div class="modal fade" id="editBook" tabindex="-1" aria-labelledby="editBookLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editBookLabel">Update a Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
        <div class="mb-3">
            <input name="Update_BookID"  placeholder="Book ID" type="hidden" class="form-control" id="Update_BookID">
          </div>
          <div class="mb-3">
            <input required name="Update_BookName"  placeholder="Book Name" type="text" class="form-control" id="Update_BookName">
          </div>
          <div class="mb-3">
            <input required name="Update_Author"  placeholder="Author" type="text" class="form-control" id="Update_Author">
          </div>
          <div class="mb-3">
            <input required name="Update_Stocks" placeholder="Stocks" type="number" class="form-control" id="Update_Stocks">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <Button name="Update" type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>