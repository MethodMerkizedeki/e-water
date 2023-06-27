<?= head('Add Member'); ?>

<?php
// Pagination
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 50;
$offset = ($pageno - 1) * $no_of_records_per_page;

// Get the number of total number of pages
$total_pages_sql = "SELECT COUNT(*) FROM users";
$result = mysqli_query($connection, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>

<main class="page-content">
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-10">
                    <a href="users.php?source=add_user" class="viewOnly userUser btn btn-primary mb-3 mb-lg-0">
                        <i class="bi bi-plus-square"></i>
                        Add User
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-3">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Users Details</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table id="dataTable" class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Units</th>
                            <th>User Since</th>
                            <th class="text-center viewOnly">Action</th>
                        </tr>
                    </thead>
                    <tbody class="user-details-result">

                        <?php

                        $query = "SELECT * FROM users ORDER BY `user_added_time` DESC LIMIT $offset, $no_of_records_per_page";
                        $select_users = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($select_users)) {
                            $user_id = test_input($row['user_id'], $connection);
                            $user_full_name = test_input($row['user_full_name'], $connection);
                            $user_full_name = ucwords($user_full_name);
                            $user_email = test_input($row['user_email'], $connection);
                            $user_units = test_input($row['units'], $connection);

                            $user_added_time = test_input($row['user_added_time'], $connection);
                            $user_added_date = date("d-M-Y", $user_added_time);

                            $user_phone = test_input($row['user_phone'], $connection);
                            $user_phone = "+255" . $user_phone;
                        ?>


                            <tr class="users-details">
                                <td><?= $user_id;?></td>
                                <td>
                                    <a href="#">
                                        <?= $user_full_name; ?>
                                    </a>
                                </td>
                                <td><?= $user_email; ?></td>
                                <td><?= $user_phone; ?></td>
                                <td><?= $user_units; ?></td>
                                <td><?= $user_added_date; ?></td>
                                <td class="text-center viewOnly">
                                    <a href='#'>
                                        <button class='btn btn-primary'>
                                            <i class="bi bi-pen"></i>
                                            Edit
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="mt-2 float-lg-end">
                <nav class="float-lg-end" aria-label="Page navigation example">
                    <ul class="pagination round-pagination">
                        <li class="page-item">
                            <a class="page-link" href="?pageno=1">First</a>
                        </li>
                        <li class="page-item <?php if ($pageno <= 1) {
                                                    echo 'disabled';
                                                } ?>">
                            <a class="page-link" href="<?php if ($pageno <= 1) {
                                                            echo '#';
                                                        } else {
                                                            echo "?pageno=" . ($pageno - 1);
                                                        } ?>">Previous</a>
                        </li>

                        <li class="page-item <?php if ($pageno >= $total_pages) {
                                                    echo 'disabled';
                                                } ?>">
                            <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                                            echo '#';
                                                        } else {
                                                            echo "?pageno=" . ($pageno + 1);
                                                        } ?>">Next</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a>
                        </li>
                    </ul>
                </nav>
            </div> -->
        </div>
    </div>
</main>


<?= footer(); ?>