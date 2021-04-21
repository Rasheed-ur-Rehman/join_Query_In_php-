<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php 
$conn=mysqli_connect('localhost','root','','product_store');

$sql=mysqli_query($conn,"SELECT user.id, user.name ,users.address,users.id FROM users  JOIN user on user.id = users.id");
?>
<table class="table">
	<h2 style="text-align: center ; color: red">Inner Join quaries</h2>
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Location</th>
	</tr>
	
<?php

while($row=mysqli_fetch_array($sql)){
?>
<table class="table">
<tr>
	<?php
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['address']."</td>";

	?>

	</tr>
	</table>
	<?php
}

 ?>
 <hr style="color: red; height: 10px; border-color: red">
 <h2 style="text-align: center; color: red">Right Join  Quaries</h2>

<?php

$sql=mysqli_query($conn,'SELECT user.id, user.name ,users.address,users.id FROM users right join user on users.id=user.id');

?>
<table class="table">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
	</tr>


<?php
while ($row=mysqli_fetch_array($sql)) {
	
	$id=$row['id'];
	$name=$row['name'];
	$address=$row['address'];
?>
<table class="table">
<tr>
	<?php
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$address."</td>";
	?>
</tr>	
</table>

<?php
}

  ?>
<hr style="border-color: red">

<h2 style="text-align: center; color: red">Left Join</h2>
<?php  
$sql=mysqli_query($conn,"SELECT user.id ,user.name,users.id,users.address FROM users LEFT JOIN user on user.id=users.id ");


?>
<table class="table">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
	</tr>
</table>
<?php
while ($row=mysqli_fetch_array($sql)) {
$id=$row['id'];
$name=$row['name'];
$address=$row['address'];
	?>
<table class="table">
	<tr>
		<?php
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$address."</td>";
		?>
	</tr>
</table>

	<?php

}

?>

<hr style="border-color: red">

<h2 style="text-align: center; color: red">Full Outer Join</h2>

<?php 
$sql=mysqli_query($conn,"SELECT user.id,user.name,users.id,users.address FROM users left Outer join user on user.id=users.id");
?>
<table class="table">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Address</td>
	</tr>
</table>

<?php
while ($row=mysqli_fetch_array($sql)) {

	$id=$row['id'];
	$name=$row['name'];
	$address=$row['address'];

?>
<table class="table">
	<tr>
		<?php
echo "<td>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$address."</td>";
		?>
	</tr>
</table>

<?php	
}


 ?>

