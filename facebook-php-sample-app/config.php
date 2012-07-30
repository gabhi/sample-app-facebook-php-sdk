<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '272382442868360',
  'secret' => 'fb36f3b0c2f2f4c0600b7b853d6c0048',
));


 
$user = $facebook->getUser();

?>
