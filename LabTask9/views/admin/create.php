<div class="admin-form">
    <form id="add-admin-form" action="controllers/admin.php" method="post">
        <fieldset>
            <legend>Create New Admin:</legend>
            <div class="margin-bottom-1">
                <label for="create-admin-name">Full Name</label>
                <input type="text" id="create-admin-name" required name="name"  placeholder="Admin Name">
            </div>
            <div class="margin-bottom-1">
                <label for="create-admin-email">Email</label>
                <input type="email" id="create-admin-email" required name="email"  placeholder="Admin Email">
            </div>

            <div class="margin-bottom-1">
                <label for="create-admin-password">Password</label>
                <input type="password" id="create-admin-password" required name="password"  placeholder="Password">
            </div>
            
            <div class="margin-bottom-1">
                <label for="create-admin-confirm-password">Confirm Password</label>
                <input type="password" id="create-admin-confirm-password" required name="confirm_password" placeholder="Confirm Password">
            </div>
            
            <div class="">
                <input name="save_admin" type="hidden" value="1">
                <button id="save-admin" name="save" type="submit" class="margin-top-1 custom-button text-white background-green"> Save </button>
                <button name="reset" type="reset" class="margin-top-1 custom-button text-white background-skyblue"> Reset </button>
            </div>
        </fieldset>
    </form>
</div>