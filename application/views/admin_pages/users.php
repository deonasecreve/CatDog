<div class="content-wrapper">
	<div class="container">
			<div class="row">
	        	<div class="col-md-12">
			        <div class="table-responsive">
						<table id="mytable" class="table table-bordred table-striped">
			                <thead>
								<th>Id</th>
								<th>Email</th>
			                    <th>First name</th>
			                    <th>Lastname</th>
			                    <th>Password</th>
			                    <th>Role</th>
			                    <th>Edit</th>
			                    <th>Delete</th>
			                </thead>
			    			<tbody>

	<?php
	    if(isset($users)):
	        foreach($users as $row):
	?>

								<tr>
									<td><?=$row['id']?></td>
									<td><?=$row['email']?></td>
									<td><?=$row['first_name']?></td>
									<td><?=$row['last_name']?></td>
									<td>*****</td>
									<td><?=$row['role']?></td>
									<td><a href="<?php echo site_url();?>/admin/edit/<?php echo $row['id']; ?>"><p data-placement="top" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>
						    		<td><a href="<?php echo site_url();?>/admin/delete/<?php echo $row['id']; ?>"><p data-placement="top" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
								</tr>

	<?php
	        endforeach;
	    endif;
	?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
</div>
