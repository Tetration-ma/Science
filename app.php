<?php

require 'vendor/autoload.php';

use \Tetration\Science\Optimize\Linprog;

$aobject = new ArrayObject([[2, 3],[-3,2],[0, 2],[2, 1],[-1, 0],[0, -1]]);

$A = new ArrayObject([[2, 3],[-3,2],[0, 2],[2, 1],[-1, 0],[0, -1]]);
$b = new ArrayObject([6, 3, 5, 4, 0, 0]);
$c = new ArrayObject([-4,-3]);

$linprog = new Linprog($c, $A, $b);