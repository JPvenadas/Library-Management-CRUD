<div class="modal fade" id="editStudent" tabindex="-1" aria-labelledby="editStudentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editStudentLabel">Update Student Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
        <div class="mb-3">
            <input name="Update_StudentID"  placeholder="Book ID" type="hidden" class="form-control" id="Update_StudentID">
          </div>
          <div class="mb-3">
            <input required name="Update_StudentName"  placeholder="Book Name" type="text" class="form-control" id="Update_StudentName">
          </div>
          <div class="mb-3">
            <input required name="Update_YearSection"  placeholder="Author" type="text" class="form-control" id="Update_YearSection">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <Button name="UpdateStudent" type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>