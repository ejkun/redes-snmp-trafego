<?php

$system = snmp2_real_walk('snmp.live.gambitcommunications.com', 'public', 'system');

$output = array();

foreach ($system as $key => $item) {
    $output[$key] = $item;
}

/*echo json_encode($output);*/

echo json_encode(
    array(
        'sysDescr' => substr($system["SNMPv2-MIB::sysDescr.0"], strlen("String: ")),
        'sysObjectId' => substr($system["SNMPv2-MIB::sysObjectID.0"], strlen("String: ")),
        'sysUpTimeInstance' => substr($system["DISMAN-EVENT-MIB::sysUpTimeInstance"], strlen("Timeticks: ")),
        'sysContact' => substr($system["SNMPv2-MIB::sysContact.0"], strlen("String: ")),
        'sysName' => substr($system["SNMPv2-MIB::sysName.0"], strlen("String: "))
    )
);