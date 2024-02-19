<?php

require_once("../lib/ts3admin.class.php");

// 3KE1yxf0 serveradmin pk: 05Qb33xiyhnojkLxURa9zOPjtiKZVpM2RXQ3FzJy

$ts = new par0noid\ts3admin("localhost", 10011);
var_dump($ts->connect());

var_dump($ts->login("serveradmin", "3KE1yxf0"));
var_dump($ts->selectServer("9987", "port", false, "TestBot"));

$clientList = $ts->clientList();

$ts->serverNotifyRegister("server");
$ts->serverNotifyRegister("channel");

while(true)
{
    $query = $ts->queryLoginList();
    var_dump($query);
    /**
     * without accounts:
     * array(3) {
     * ["success"]=>
     * bool(true)
     * ["errors"]=>
     * array(0) {
     * }
     * ["data"]=>
     * array(0) {
     * }
     * }
     *
     * with accounts:
     *
     * array(3) {
     * ["success"]=>
     * bool(true)
     * ["errors"]=>
     * array(0) {
     * }
     * ["data"]=>
     * array(1) {
     * [0]=>
     * array(3) {
     * ["cldbid"]=>
     * string(1) "3"
     * ["sid"]=>
     * string(1) "1"
     * ["client_login_name"]=>
     * string(10) "test-login"
     * }
     * }
     * }
 *
     * */


}