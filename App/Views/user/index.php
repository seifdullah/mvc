<?php require_once VIEW_PATH . 'start.php'; ?>

<div class="col-12 just">
    <a href="/user/add" class="btn btn-primary">Add User</a>
</div>

<h1 class="text-center"><hr>All <small class="text-muted">Users</small><hr> </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Location</th>
            <th scope="col">Dept_ID</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $datum) {
            // print_r($datum);
            // exit;
        ?>
            <tr>
                <td><?php echo $datum['id']; ?></td>
                <td><?php echo $datum['name']; ?></td>
                <td><?php echo $datum['address']; ?></td>
                <td><?php echo $datum['location']; ?></td>
                <td><?php echo $datum['did']; ?></td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php require_once VIEW_PATH . 'end.php'; ?>