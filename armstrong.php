<?php  
$msg = '';
 if($_POST)  
 {    
  $number = $_POST['number'];  
  
  $a = $number;  
  $sum  = 0;  
 
  while( $a != 0 )  
  {  
   $rem   = $a % 10; 
   $sum   = $sum + ( $rem * $rem * $rem ); 
   $a   = $a / 10;
  }   
  if( $number == $sum )  
  {  
        $msg = 'Yes <b>'. $number . '</b> is an Armstrong Number';  
  }else  
  {  
         $msg =  '<b>' . $number . '</b>' . ' is not an Armstrong Number';  
  }  
 }  
?>     
<html>  
<head>
</head>
<body>  
 <form method="post"> <center>
  <h1>Find Armstrong Number</h1>
  <br>
   <input type="number" name="number" placeholder="Enter the number">  <br>
   <br>
   <input type="submit" value="Submit">  
  </form>  
  <h3><?php echo $msg; ?></h3></center>
</body>  
</html> 