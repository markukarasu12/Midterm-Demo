<?php $arrDrinks = array('Coke' => 15,'Sprite'=>20,'Royal'=>20,'Pepsi'=>15,'Mountain Dew' =>20); ?>
<?php $arrSize = array('Regular' => 0, 'Up-Size'=>5, 'Jumbo'=>10); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>

<form method="post">
    <fieldset class="border p-3 style=width; 550px">
        <legend class="w-auto">Product: </legend>
        <?php 
            foreach ($arrDrinks as $key => $value)
			echo '<input type="checkbox" name="chkDrinks[]" id="chk'.$key.'" value="'.$key.'"><label for="chk'.$key.'">'. $key.' (₱'.$value.')</label><br>';
		?>
    </fieldset>

		<fieldset class="border p-3" style="width:550px">
			<legend class=w-auto>Options:</legend>
			<label for="productSize">Size</label>
			<select name="productSize" id="productSize">

				<?php foreach ($arrSize as $key => $value)
					echo '<option value="'.$key.'">'. $key .' (add ₱'.$value .')</option>';
				?>

			</select>
			<label for="numQuantity">Quantity</label>
			<input type="number" name="numQuantity" id="numQuantity" min="0" value="0">
			<button type="submit" name="btncheckout">Check Out</button>
		</fieldset>

	</form>

    <?php 
		
		if (isset($_POST['btnProcess'])) {
			echo '<hr>';
			if (isset($_POST['chkDrinks']) && isset($_POST['numQuantity']) > 0) { 
				$quantity = $_POST['numQuantity'];
				$size = $_POST['productSize'];
				$items = $_POST['chkDrinks'];
				$totalItems = count($items) * $quantity;
				$totalAmount = 0;
				?>
				<h3>Purchase Summary:</h3>
				<ul>
					<?php 
						foreach ($items as $itemname) {
							$drinksAmount = ($arrDrinks[$itemname] + $arrSize[$size]) * $quantity;
  							$totalAmount += $drinksAmount;
  							if ($quantity > 1) {
  								echo '<li>'.$quantity.' pieces of '.$size. $itemname.' amounting to ₱'.$drinksAmount .'.</li>';
  							}else{
  								echo '<li>'.$quantity.' piece of '.$size.' '.$itemname.' amounting to ₱'.$drinksAmount .'.</li>';
  							}
						}
						
					 ?>
				</ul>
				<?php  
					echo 'Total Quantity of items: '.$totalItems.'<br>';
					echo 'Total Sales: '.$totalAmount;
				?>
		<?php }else{
					echo "No Selected Product. Please Try Again!";		
		}
		}
	?>

    
</body>
</html>