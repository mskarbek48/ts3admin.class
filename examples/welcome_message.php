<?php

require_once("../lib/ts3admin.class.php");

// 3KE1yxf0 serveradmin pk: 05Qb33xiyhnojkLxURa9zOPjtiKZVpM2RXQ3FzJy

$ts = new par0noid\ts3admin("localhost", 10011);
$ts->connect();

$ts->login("serveradmin", "3KE1yxf0");
$ts->selectServer("9987", "port", false, "TestBot");


$ts->serverNotifyRegister("server");
$ts->serverNotifyRegister("channel");

while(true) // Infinity loop
{
    $ts->version(); // keep-alive
    $event = $ts->eventListener(); // Multiple events are possible but in queue from oldest to newest

    if(array_key_exists("notifycliententerview", $event)) // Check type of event
    {
        $ts->sendMessage(1, $event['clid'], "Hello!"); // Send message
    }



}

