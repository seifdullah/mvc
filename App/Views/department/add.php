<?php require_once VIEW_PATH . 'start.php'; ?>

<form action="/department/save" method="post">
  <div class="mb-3">
    <label for="id" class="form-label">Department ID</label>
    <input type="text" class="form-control" name="id" placeholder="Enter Department ID">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Department Name">
  </div>
  <!-- <div class="mb-3">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" name="department" placeholder="Enter Department">
  </div>
  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" name="position" placeholder="Position">
  </div> -->
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php require_once VIEW_PATH . 'end.php'; ?>