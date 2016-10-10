<?php
/**
 * Created by PhpStorm.
 * User: 1307894
 * Date: 10/10/2016
 * Time: 14:09
 */

$db = new mysqli(
    "hostname",
    "username",
    "password",
    "db_name"
);

if($db>connect_errno){
    die('Connect failed['.$db>connect_error.']');
}

?>