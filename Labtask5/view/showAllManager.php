<?php
require_once '../controller/managerInfo.php';

$manager = fetchAllManager();


include "nav.php";



?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Username</th>
				<th>First Name</th>
				<th>Last name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Image</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($manager as $i => $manager) : ?>
				<tr>
					<td><a href="showManager.php?id=<?php echo $manager['manager_id'] ?>"><?php echo $manager['manager_username'] ?></a></td>
					<td><?php echo $manager['firstname'] ?></td>
					<td><?php echo $manager['lastname'] ?></td>
					<td><?php echo $manager['phone'] ?></td>
					<td><?php echo $manager['email'] ?></td>
					<td><?php echo $manager['password'] ?></td>

					<td><img width="100px" src="uploads/<?php echo $manager['image'] ?>" alt="<?php echo $manager['manager_username'] ?>"></td>
					<td>
						<a href="editManager.php?id=<?php echo $manager['ID'] ?>">Edit</a>

						<a href="../controller/?php echo $manager['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>


		</tbody>


	</table>


</body>

</html>