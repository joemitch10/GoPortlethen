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
   /** $myname = "Joe";
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
    */

$numberOfHobbits = 2;
switch ($numberOfHobbits){
    case 1:
        echo "1 sad hobbit";
        break;
    case 2;
        echo "2 happy hobbits";
        break;
    case 3:
        echo "3 hobbits are a crowd";
        break;
    default:
        echo "All the hobbits have gone home";
}

?>


</p>


</body>
</html>