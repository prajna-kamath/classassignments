<?php   
$msg = '';
$reverse = '';
$num = '';
$sum = 0;
$m = 0;
$temp = '';
    if($_POST)  
    {  
        $num = $_POST['num']; 
        $temp = $num;
        $reverse = strrev($num);  
        if($num == $reverse){  
            $msg =  'The number <b>' . $num . '</b> is Palindrome';     
        }else{  
            $msg =  'The number <b>' . $num . '</b> is not a Palindrome';   
        }  
        while($num > 0)
        {
            $m = $num % 10;
            $sum  = $sum + $m;
            $num = $num / 10;  
        }
       
}     
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Palindrome</title>
</head>
<body><center>
    <h1>Palindrome</h1>
    <form method="post">        
        <input type="text" name="num" placeholder="Enter the number" /><br>  <br>
        <button type="submit">Check</button>  </center>
    </form>  

      <center><h3><?php echo $msg; ?><br>
      Reverse of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $reverse . '</b>' ?><br>
      Sum of <?php echo '<b>' . $temp . '</b>' ?> is <?php echo '<b>' . $sum . '</b>' ?></h3></center>

</body>
</html>