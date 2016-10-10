<?php
/**
 * Created by PhpStorm.
 * User: 1307894
 * Date: 10/10/2016
 * Time: 13:50
 */

define('DB_SERVER','servername');
define('DB_USERNAME','username');
define('DB_USERNAME','password');
define('DB_PASSWORD','database');

$db = mysqli_connect(DB_SERVER. DB_USERNAME, DB_PASSWORD, DB_DATABASE);

?>