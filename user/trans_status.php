<?php
require('../script.php');
    $classObj = new ok;
    $classObj->dbcon();
    $classObj->trans_status();
    session_start();
?>