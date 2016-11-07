<?php
/**
 * Created by PhpStorm.
 * User: 1307894
 * Date: 07/11/2016
 * Time: 13:58
 */



define('DB_SERVER','us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME','b54ded4e477e17');
define('DB_PASSWORD','fcb16056');
define('DB_DATABASE','1307894db');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if($db>connect_errno){
    die('Connect failed['.$db>connect_error.']');
}