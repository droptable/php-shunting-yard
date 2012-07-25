<?php

require 'parser.php';

use rr\shunt\Parser;

$trm = '1+2*3/4%5';
$res = Parser::parse($trm);

print $res; // 2 (float)
