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

$sql_query = "SELECT * FROM superheroes WHERE superpower LIKE '%laser%'";

$result = $db>query($sql_query);

while($row = $result>fetch_array()){
    echo "<p>" . $row['superheroName'] . "</p>";
}

$result>dose();

$db>dose();



?>