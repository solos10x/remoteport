<?php include("include/header.php");?>
<?php 
	// customers count
	$get_customers = mysqli_query($config,"select * from request order by id ASC");
?>

<div class="container-fluid">
		<div>
		</div>
		</hr>
		<div id="display_search_results" class="container">
			<table class="table">
				<thead>
					<th>User Name</th>
					<th>Eamail</th>
					<th>Status</th>
				</thead>
				<!-- head ends -->

				<tbody>
					
					<?php while ($customer =mysqli_fetch_array($get_customers)):?>
					<tr>
						<td><?php echo $customer['name'];?> </td>
						<td><?php echo $customer['email'];?></td>
						<td><?php echo $customer['address'];?> </td>
					</tr>
					<?php endwhile;?>

				</tbody>
			</table>
		</div>
</div>

<?php include("include/footer.php");?>