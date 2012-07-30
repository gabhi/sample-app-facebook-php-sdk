<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '477422715604345',
  'secret' => 'b548ebc4ceb9d054562dd457fc3af1ff',
));


 
$user = $facebook->getUser();

?>
