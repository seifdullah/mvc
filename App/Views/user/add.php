<?php require_once VIEW_PATH . 'start.php'; ?>

<form action="/user/save" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
  </div>
  <div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" class="form-control" name="location" placeholder="Enter Location">
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<?php require_once VIEW_PATH . 'end.php'; ?>