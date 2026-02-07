<?php
$d = date("D");
$x = 1;


echo $d;
echo $x;
echo "<br>";

if( $d == "Sat"){
    echo "its Saturday";
} elseif ($d == "Mon") {
    echo "its Monday";
} else {
    echo "have a nice day";
}
?>
<br>
<?php
    switch ($x)
    {
    case 1:
    echo "Number 1";
    break;
    case 2:
    echo "Number 2";
    break;
    case 3:
    echo "Number 3";
    break;
    default:
    echo "if not found";
    }
    ?>
