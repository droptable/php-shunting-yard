<?php

require 'parser.php';

use rr\shunt\Parser;

Parser::def('abs'); // wrapper
Parser::def('log'); // wrapper
Parser::def('foo', 10);
Parser::def('bar', function($a, $b, $c) { return $a + $b + $c; });

$trm = 'log(abs(-1) + foo + bar(1, 2, 3)) ^ (2 + 1)';
$res = Parser::parse($trm);

print $res; // 22.74248075099
