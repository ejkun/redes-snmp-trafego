<?php

$walkIn = snmp2_real_walk('snmp.live.gambitcommunications.com', 'public', '1.3.6.1.2.1.2.2.1.11.2');

$in = array_shift($walkIn);

$in = substr($in, strlen("Counter32: "));

$walkOut = snmp2_real_walk('snmp.live.gambitcommunications.com', 'public', '1.3.6.1.2.1.2.2.1.17.2');

$out = array_shift($walkOut);

$out = substr($out, strlen("Counter32: "));

echo json_encode(array('in' => $in, 'out' => $out));