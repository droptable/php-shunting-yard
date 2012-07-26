<?php

require 'parser.php';

use rr\shunt\Parser;

$trm = '3+4*2/(1-5)^2^3';
$res = Parser::parse($trm);

print $res; // 3.0001220703125
