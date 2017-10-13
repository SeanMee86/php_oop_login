<?php
require_once 'core/init.php';

$user = DB::getInstance()->get('users', ['username', '=', 'sean.mee86']);

if(!$user -> count()){
    echo 'No user';
}else{
    echo 'OK!';
}