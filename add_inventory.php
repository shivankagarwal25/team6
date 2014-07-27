<html>
<body>
<form name="f1" method="post" action="add_inventory.php">
Enter the Ingredient Name:<input type="text" name="ingredient_name"><br>
Enter the Cost:<input type="text" name="ingredient_cost"><br>
Enter the Protein Content:<input type="text" name="protein_content"><br>
Enter the Energy Content:<input type="text" name="energy_cost"><br>
Enter the Quantity:<input type="text" name="ingredient_quantity"><br>
Enter the Substitute(NULL if nothing present):<input type="text" name="ingredient_substitute"><br>
<input type="submit" name="submit" value="submit">
</form>


<?php
$iname=$_POST["ingredient_name"];
$icost=$_POST["ingredient_cost"];
$pcontent=$_POST["protein_content"];
$econtent=$_POST["energy_content"];
$iquantity=$_POST["ingredient_quantity"];
$isub=$_POST["ingredient_substitute"];
if(!isset($isub))
$isub=NULL;
$conn=mysqli_connect("localhost","root","cfg2014!","team6");
                  if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                      }
                  else
				  { 
				    mysqli_query($con,"INSERT INTO ingredients VALUES (NULL,$iname, $icost,$pcontent,$econtent,$iquantity,$isub)");
				  }           
                  header("location:inventory_view.php");
				  ?>
</body>	
</html>			  