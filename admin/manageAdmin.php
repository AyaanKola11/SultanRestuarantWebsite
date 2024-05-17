<?php include ('partials/menu.php'); ?>

<!-- Main Content Section Starts here -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <br />
        <br />

        <!-- Button for adding the Admin -->
        <a href="addAdmin.php" class="btn-primary">Add Admin</a>

        <br />
        <br />

        <table class="tbl-full">
            <tr>
                <th>Admin Id</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>Mpho Kola</td>
                <td>MphoJKola</td>
                <td>
                    <a href="#" class="btn-sec">Update admin</a>
                    <a href="#" class="btn-red">Delete admin</a>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Tylor Kola</td>
                <td>TjdkJla</td>
                <td>
                    <a href="#" class="btn-sec">Update admin</a>
                    <a href="#" class="btn-red">Delete admin</a>
                </td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Jess Doe</td>
                <td>JD458</td>
                <td>
                    <a href="#" class="btn-sec">Update admin</a>
                    <a href="#" class="btn-red">Delete admin</a>
                </td>
            </tr>
        </table>

    </div>
</div>
<!-- Main Content Section Ends here -->

<?php include ('partials/footer.php'); ?>