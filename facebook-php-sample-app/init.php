<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../src/facebook.php';
include 'config.php';
include 'constants.php';
$facebook = new Facebook($config);


 
$user = $facebook->getUser();
?>
