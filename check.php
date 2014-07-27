<!DOCTYPE HTML>
<head>
	<title>Akshaya Patra</title>
</head>
<body >
	<a href="carousal.html" style="text-decoration:none;padding-top:30px;padding-left:15px;margin-top:30px;float:left">Main Menu</a>
	<div style="clear:both"></div>
	<div style="width:1000px;color:#1c478e;float:right;">
	
<?php
	include "db.php";
	$tbl_name="best_list";
	$sql = "SELECT * FROM best_list;";
	$result=mysqli_query($con,$sql);

echo '<table border="1">';
echo '<tr style="text-align:center;">';
echo '<td><b>'; echo "Recipe"; echo '</b></td>';
echo '<td><b>';echo "Nutrients"; echo'</b></td>';
echo '<td><b>';echo "Proteins"; echo'</b></td>';
echo '<td><b>';echo "Price"; echo'</b></td>';

echo '</tr>';
while ($row = mysqli_fetch_array($result)) {
?>
<tr>
<td> <?php echo $row['Recipe'] ;?> </td>
<td> <?php echo $row['Nutrition'] ;?> </td>
<td> <?php echo $row['Protein'] ;?> </td>
<td> <?php echo $row['Price'] ;?> </td>
</tr>

<?php
}	
?>
</table>
	</div>
</BODY>
</html>