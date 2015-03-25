<?php

require "config.inc.php";

$tagram = new printInstagramv1(CLIENTE_ID,SECRET_ID);

$tagram->print_();


?>