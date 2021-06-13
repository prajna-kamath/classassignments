<!DOCTYPE html>
<head>
</head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {

        $unit_cost_first = 3.00;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.00;
        $unit_cost_fourth = 6.00;

        if($units <= 100) {
            $bill = $units * $unit_cost_first;
        }
        else if($units > 100 && $units <= 200) {
            $temp = 100 * $unit_cost_first;
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        else if($units > 200 && $units <= 300) {
            $temp = (100 *$unit_cost_first) + (100 * $unit_cost_second);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else {
            $temp = (100 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 300;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
            $result_str = 'Total amount of ' . $units . ' Unit is  ' . number_format((float)$bill, 2, '.', '');
    }
}
?>

<body>
<div><center>
	<h1>Calculate Electricity Bill</h1>
        <br>
		<form action="" method="post">
            	<h3><input type="number" name="units"/>
            <input type="submit" name="unit-submit" id="unit-submit" value="Check" />
		</form>
		<div><?php echo '<br />' . $result_str; ?>
		</div></center></h3>
	</div>
</body>
</html>