<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	<h2>Users Table</h2>
	<?php if($success != ''){ ?>
		<div class="text-center text-success" style="margin-bottom: 5px;margin-top: 5px;">
			<p class="bg-success" style="border: 1px solid #cccccc;padding: 5px;"><b><?php echo $success; ?></b></p>
		</div>
	<?php }else if($error != ''){ ?>
		<div class="text-center text-danger" style="margin-bottom: 5px;margin-top: 5px;">
			<p class="bg-danger" style="border: 1px solid #cccccc;padding: 5px;"><b><?php echo $error; ?></b></p>
		</div>
	<?php } ?>
	<table class="table white table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Name</th>
				<th>Email</th>
				<th>Roll</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			{user}
			<tr>
				<td>UGC-825{id}</td>
				<td>{name}</td>
				<td>{email}</td>
				<td>{roll}</td>
				<td>
					<a class="btn btn-sm btn-primary" href="<?php echo site_url('user/edit'); ?>/{id}"><span class="glyphicon glyphicon-edit"></span></a>
					<a class="btn btn-sm btn-danger" href="<?php echo site_url('user/remove'); ?>/{id}"><span class="glyphicon glyphicon-remove-circle"></span></a>
				</td>
			</tr>
			{/user}
		</tbody>
	</table>
</div>
