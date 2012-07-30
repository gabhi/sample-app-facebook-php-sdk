<?php
$gabhi = $facebook->api('/abhijit.gaikwad');
?>

<h3>Public profile of Abhijit Gaikwad</h3>
<img src="https://graph.facebook.com/abhijit.gaikwad/picture">
<?php echo $gabhi['name']; ?> 