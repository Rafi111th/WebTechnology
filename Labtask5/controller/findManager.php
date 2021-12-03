<?php

require_once '../model/model.php';

if (isset($_POST['findManager'])) {

    echo $_POST['manager_username'];

    try {

        $allSearchedManager = searchManager($_POST['manager_username']);
        require_once '../showSearchedManager.php';
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
