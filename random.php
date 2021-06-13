<?php
$rand = '';
    $random = rand(1, 100);
    $rand = $random;
?>
<html>
<head><title>Random</title></head>
     <body>
    <center>
<h2>Random Number Generated</h2>
<?php echo $rand; ?>
<br>
<h2>And <b><?php echo $rand; ?><sup>2</sup></b> is
 <?php
    echo '<b>' . sqrt($random). '</b>';
?>
<br>
<br>
<button class="w3-button" onClick="window.location.reload();">Generate New Number</button>
</center>
</body>
</html>