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
    $event = $ts->eventListener(0);

    var_dump($event);

    /**
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
     * array(0) {
     * }
 */

    $ts->sendMessage(2, 1, "test" );
}