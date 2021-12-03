<?php 

require_once '../model/model.php';

if (deleteManager($_GET['manager_id'])) {
    header('Location: ../showAllManager.php');
}

 ?>