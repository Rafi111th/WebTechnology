
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findManager.php">
      <h1>SEARCH FOR Manager</h1>
      <input type="text" name="manager_username" />
      <input type="submit" name="findManager" value="Search"/>
    </form>


 
  </body>
</html>