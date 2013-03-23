#!/php -q
<?php  
// Run from command prompt > php -q websocket.demo.php
date_default_timezone_set("Europe/Bucharest");
// Basic WebSocket demo echoes msg back to client
include "websocket.class.php";
$master = new WebSocket("localhost",12345);
