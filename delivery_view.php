
<!DOCTYPE html>
<html lang="en">
<head>
	<title>students</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main1.css">
	<style>

    #outer 
	{
		width:100%;
		text-align:center;
		background-color:black;
	}
    .inner
	{
		display:inline-block;
	}
   button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
 }
 button:hover {
  opacity: 0.8;
}
</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">

								<th class="column1">Name</>
								<th class="column2">Email</th>
								<th class="column3">Address</th>
								<th style="column4">City</th>
                                <th style="column5">State</th>
                                <th style="column5">Zip</th>

							</tr>
						</thead>
						<?php require "connection.php"; ?>
                        <?php
                        $name1= $_GET['name'];

						$sql="select * from users where p_user = '$name1'";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";

								echo "<td>" .$row["d_user"]."</td>";
								echo "<td>" .$row["email1"]."</td>";
								echo "<td>" .$row["address1"]."</td>";
								echo "<td>" .$row["city1"]."</td>";
                                echo "<td>" .$row["state1"] ."</td>";
                                echo "<td>" .$row["zip1"] ."</td>";
                               	echo "</tr>";
							}
							echo "</table>";
						}
						else{
							echo "No Messages";
						}
						?>
						</table>
				</div>
		</div>
	</div>
  </div>

</body>
</html>