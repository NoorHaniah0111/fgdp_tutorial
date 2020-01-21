<?php
	/*foreach ($user as $row1 ) {
	 	echo "Username &nbsp= ". $row1['username']. "<br>". "Email &nbsp &nbsp &nbsp &nbsp = "
	 					  .$row1['email']. "<br>" . "Userrole &nbsp&nbsp = " 
	 					  .$row1['userrole']."<br>"."<br>"; } */
?>

<div class="col-md-12 row" style="padding: 15px">
	<h1> List User Aplikasi </h1>
</div>

<div class="col-md-6 row" style="padding: 15px">
	<a href="<?php echo site_url ('home/add_user'); ?>" class="btn btn-primary"> Tambah User </a>

	<table class="table table-striped" style="margin-top: 15px">
		<thead>
			<tr>
				<th scope="col"> Username </th>
				<th scope="col"> Email </th>
				<th scope="col"> User Role </th>
				<th scope="col"> Action </th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach ($user as $row) {
					echo "<tr>
								<td>".$row['username']."</td>
								<td>".$row['email']."</td>
								<td>".$row['userrole']."</td>

								<td>
									<a  class='btn btn-info' href= '".site_url('home/edit_user/'.$row['id_user'])."'> Edit </a>
									<a  class='btn btn-danger' href= '".site_url('home/delete_user/'.$row['id_user'])."'> Delete </a>
								</td>
						</tr>";
				}
			?>
		</tbody>
	</table>
</div>
