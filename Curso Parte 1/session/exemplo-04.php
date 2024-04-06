<?php

session_id('jpu1lgq9drma3es216igsj8huoarra');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>