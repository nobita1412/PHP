<?php
    $userName = $_POST['email'];
    $passWord = $_POST['password'];

    $result = ($userName == 'admin' && $passWord == '123456') ? "Successfully!" : "Failed to login";
    echo $result;
?>