<?php
# this code could go into a file named use_point.php
include("point.php");

$p1 = new Point(0, 0);
$p2 = new Point(25, 60);
print "Distance between $p1 and $p2 is " . $p1->distance($p2) . "\n\n";

var_dump($p2);   # var_dump prints detailed state of an object
?>   