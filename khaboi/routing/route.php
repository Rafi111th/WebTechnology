<?php
    if (isset($_GET['route'])) {
        $fileName = $_GET['route'].'.php';
        $include = $base_url.'/views/'.$fileName;
        if (file_exists($include)) {
            include($include);
        } else {
            include($base_url.'/views/404.php');
        }
        // if ($_GET['route'] == 'dashboard') {

        // } else if ($_GET['route'] == 'form') {
        // 	include($base_url.'/views/form.php');
        // }
    } else {
        include($base_url.'/views/dashboard.php');
    }
?>