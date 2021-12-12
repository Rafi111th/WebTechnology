<?php
if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
?>
    <div class="admin-content">

        <div class="admin-header">
            <h1 style="display: inline; float: left; margin-left: 10px; font-family: Arial, Helvetica, sans-serif">
                <i class="fa fa-users"></i>
                Admin Management
            </h1>
            <div class="form-inline" style="display: inline; float: left; margin-left: 100px; width: 40%;">
                <div class="input-group" style="display: flex; flex-direction: row;">
                    <input type="text" 
                        name="search" 
                        class="custom-input search-string" 
                        placeholder="Search admin"
                        style="width: auto; width: 80%; height: 28px; padding: 0.25rem 1rem;"
                    >
                    <button class="custom-button background-dark button-search-admin">
                        <i class="fas fa-fw fa-search" style="color: white;"></i>
                    </button>
                </div>
            </div>

            <div class="" style="display: inline; float: right; margin-right: 5px;">
                <button name="login" type="button" class="create-new-admin custom-button text-white background-green">
                    <i class="fa fa-plus"></i> Create Admin
                </button>
                <button name="login" type="button" class="cancel-create-edit-admin custom-button text-white background-dark display-none">
                    <i class="fa fa-times"></i> Cancel
                </button>
            </div>
        </div>

        <?php include('create.php'); ?>

        <div class="admin-edit-form">

        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Sl.</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="center">
                            <div class="pagination">

                            </div>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script type="text/javascript" src="<?php echo $root_url; ?>/views/admin/js/script.js"></script>

<?php } else {
    header("location: ?route=login");
}
?>