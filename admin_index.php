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
								<th style="column6">DELIVERY</th>

							</tr>
						</thead>
						<?php require "connection.php"; ?>
						<?php

						$sql="select * from users";
						$result=mysqli_query($con,$sql);

						if($result-> num_rows>0)
						{
							while($row = $result-> fetch_assoc())
							{
								echo "<tr>";
                                echo "<td>" .$row["p_user"]."</td>";
                                echo "<td>" .$row["email"]."</td>";
								echo "<td>" .$row["address"]."</td>";
								echo "<td>" .$row["city"]."</td>";
                                echo "<td>" .$row["state"] ."</td>";
                                echo "<td>" .$row["zip"] ."</td>";

                                ?>
								<td><a href='delivery_view.php?name=<?php echo $row['p_user'] ?>'>Delivery</a></td>
							<?php	echo "</tr>";
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
	<div id="outer">

  </div>

	


</body>
</html>
