<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    include "nav.php";

    ?>


    <form action="../controller/createManager.php" method="POST" enctype="multipart/form-data">
        <label for="name">User Name:</label><br>
        <input type="text" id="manager_username" name="manager_username"><br>
        <label for="first_name">First name:</label><br>
        <input type="text" id="firstname" name="firstname"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname"><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{11}"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <input type="file" name="image"><br><br>
        <input type="submit" name="createManager" value="Create">
        <input type="reset">
    </form>

</body>

</html>