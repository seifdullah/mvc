<?php require_once VIEW_PATH . 'start.php'; ?>
<hr>
<div class="col-12 ">
    <a href="/department/add" class="btn btn-primary" style="float:right">Add Department</a>
    <h1 class="text-center"><strong>Departments</strong> </h1>
</div>
<hr>



<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col-4">#</th>
            <th scope="col-4">Name</th>
            <th scope="col-4">Action</th>
            <!-- <th scope="col">Department</th>
            <th scope="col">Position</th> -->
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
                <td><a href=""><?php echo $datum['name']; ?></a></td>

                <td>
                    <form action='/department/delete' method="post">
                        <input type="hidden" name="id" value="<?php echo $datum['id']; ?>" />
                        <button class="text-danger">
                            <i class="fa-sharp fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>


            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php require_once VIEW_PATH . 'end.php'; ?>