<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php 
$conn=mysqli_connect('localhost','root','','product_store');

$sql=mysqli_query($conn,"SELECT user.id, user.name ,users.address,users.id FROM users Right JOIN user on user.id = users.id");
?>
<table class="table">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Location</th>
		

	</tr>
	</table>
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
