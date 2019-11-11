<div class="card">
    <div class="card-body">
        <h4 class="card-title">Employee details</h4>
        <div class="table-responsive">
        	<table class="table">
	            <thead>
	              <tr>
	                <th> First Name </th>
	                <th> Last Name </th>
	                <th> Father's Name </th>
	                <th> Mother's Name </th>
	                <th> Contact </th>
	                <th> Email </th>
	                <th> DOB </th>
	                <th> Aadhar No. </th>
	                <th> Pan No. </th>
	                <th> Gender </th>
	                <th> Country </th>
	                <th> State </th>
	                <th> City </th>
	                <th> Pincode </th>
	                <th> Address-1 </th>
	                <th> Address-2 </th>
	                <th> Status </th>
	              </tr>
	            </thead>
	            <tbody>
	            	<?php
	            		if(isset($_POST['fetch'])){
							if (mysqli_num_rows($result)>0){
								while ($row= mysqli_fetch_array($result)){
			          ?>
			              <tr>
			                <td> <?php echo $row['fname'];?> </td>
			                <td> <?php echo $row['lname'];?></td>
			                <td> <?php echo $row['father'];?></td>
			                <td> <?php echo $row['mother'];?></td>
			                <td> <?php echo $row['mobile'];?></td>
			                <td> <?php echo $row['email'];?></td>
			                <td> <?php echo $row['dob'];?></td>
			                <td> <?php echo $row['aadhar'];?></td>
			                <td> <?php echo $row['pan'];?></td>
			                <td> <?php echo $row['gender'];?></td>
			                <td> <?php echo $row['country'];?></td>
			                <td> <?php echo $row['state'];?></td>
			                <td> <?php echo $row['city'];?></td>
			                <td> <?php echo $row['zip'];?></td>
			                <td> <?php echo $row['add1'];?></td>
			                <td> <?php echo $row['add2'];?></td>
			                <td> <?php echo $row['status'];?></td>
			              </tr>
			        <?php
					          }
					      }
					  }
			      ?>
	            </tbody>
	        </table>
        </div>
    </div>
</div>
