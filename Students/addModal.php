
<button type="button" class=" mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudent" data-bs-whatever="@mdo">+ Add Student</button>

<div class="modal fade" id="addStudent" tabindex="-1" aria-labelledby="addStudentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addStudentLabel">Add a Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
          <div class="mb-3">
            <input required name="StudentName" placeholder="Student fullName" type="text" class="form-control" id="StudentName">
          </div>
          <div class="mb-3">
            <input required name="YearSection" placeholder="Year Section" type="text" class="form-control" id="YearSection">
          </div>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input required name="AddStudent" type="submit" value="Save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
 