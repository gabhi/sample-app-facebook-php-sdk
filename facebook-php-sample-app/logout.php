<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', '27socialapps.com');
session_destroy();
header('Location: http://27socialapps.com/fb/examples');
?>
