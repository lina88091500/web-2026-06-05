<?php 
include_once "db.php";

    $_POST['sh'];
    $Ad->save($_POST);

to("../admin.php?do=ad");