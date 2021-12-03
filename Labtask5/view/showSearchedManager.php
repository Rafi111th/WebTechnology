<?php  
require_once 'controller/managerInfo.php';

$manager = fetchManager($_GET['manager_id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
	        <th>Username</th>
			<th>First Name</th>
			<th>Last name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Image</th>
	</tr>
	<tr>
		<td><a href="showManager.php?id=	<?php echo $manager['manager_id'] ?></a></td>
			<td><?php echo $manager['manager_username'] ?></td>
			<td><?php echo $manager['firstname'] ?></td>
			<td><?php echo $manager['lastname'] ?></td>
			<td><?php echo $manager['email'] ?></td>
			<td><?php echo $manager['address'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $manager['image'] ?>" alt="<?php echo $manager['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>