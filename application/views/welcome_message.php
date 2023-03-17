<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div class="container">
		<div class="d-flex justify-content-between my-4">
			<h2>Registration form</h2>
			<button type="button" class="btn btn-primary btn-lg  " data-toggle="modal" data-target="#exampleModal">Add
				User</button>
		</div>
		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Password</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($product_details as $value): ?>
					<tr>
						<th scope="row">
							<?php echo $value->user_id ?>
						</th>

						<td>
							<?php echo $value->user_name ?>
						</td>
						<td>
							<?php echo $value->user_email ?>
						</td>
						<td>
							<?php echo $value->user_password ?>
						</td>
						<td>
							<a href="<?php echo base_url(); ?>Welcome/edit/<?php echo $value->user_id; ?>"
								class="btn btn-primary" type="submit">Edit</a>
							<a href="<?php echo base_url(); ?>Welcome/delete/<?php echo $value->user_id; ?>"
								class="btn btn-primary" type="submit">Delete</a>
						</td>
					</tr>


				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url(); ?>Welcome/insert">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="name" class="form-control" id="user_name" name="user_name"
								aria-describedby="emailHelp" placeholder="Enter Name">

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="user_email" name="user_email"
								aria-describedby="emailHelp" placeholder="Enter email">

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="user_password" name="user_password"
								placeholder="Password">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add User</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<pre>
	<?php
	print_r($product_details);

	?>
	</pre>




</body>

</html>