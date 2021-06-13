<!DOCTYPE html>
<html>
<head></head>
<?php
$msg = '';
if(isset($_POST['submit'])) {
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];

	switch($ch) {
		case '+':
			$r = $a + $b;
			$msg = 'Addition of two numbers = ' . $r ;
			break;

		case '-':
			$r = $a - $b;
			$msg = ' Subtraction of two numbers= '. $r ;
			break;

		case '*':
			$r = $a * $b;
			$msg = ' Multiplication of two numbers ' . $r ;
			break;

		case '/':
			$r = $a / $b;
			$msg = ' Divison of two numbers = ' . $r ;
			break;

		default:
			$msg = 'invalid option';
	}
}
?>
<body>
	
	<form method="post"><center>
		<h1>
		ARITHMETIC OPERATIONS
		</h1>
				 <input type="text" name="num1"
					value="" placeholder="Enter value 1"/>
				 <input  type="text" name="num2" value=""
					placeholder="Enter value 2"/>
				 
					<p>
  						<input type="radio" name="option" value="+" checked>
 						 <label>+</label>
 					</p>
 					<p>
						<input type="radio" name="option" value="-">
						<label>-</label>
					</p>
					<p>
						<input type="radio" name="option" value="*">
						<label>*</label>
					</p>
					<p>
						<input type="radio" name="option" value="/">
						<label>/</label>
					</p>
				
			

			
				 <input type="submit" name="submit"
					value="Submit"/>
				
			
		</table>
	</form>
<h3><?php echo $msg; ?></h3></center>

</body>
</html>
