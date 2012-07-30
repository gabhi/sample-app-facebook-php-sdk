<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'init.php';

setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', DOMAIN_NAME);
session_destroy();
$home_url = "Location: ".PROJECT_HOME_URL;
header($home_url);
?>