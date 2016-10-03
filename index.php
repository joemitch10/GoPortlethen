/**
* Created by PhpStorm.
* User: 1307894
* Date: 03/10/2016
* Time: 14:24
*/

<!DOCTYPE html>
<html
<head>
</head>
<body>
<p>
    <?php
    $myname = "Joe";
    $myage = 22;

    if($myage > 16) {
        print "Name is" . $myname . "you can buy specs";
    }
    else if($myage > 18) {
        print "Name is" . $myname . "you can buy mugs";
    }
    else if($myage > 21) {
        print "Name is" . $myname . "you can buy sausage rolls";
    }
    ?>
</p>


</body>
</html>