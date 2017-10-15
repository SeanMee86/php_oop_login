<?php
require_once 'core/init.php';

$userUpdate = DB::getInstance()->update('users', 7, [
    'password' => 'newPassword',
    'username' => 'Dale Earnhardt'
]);


