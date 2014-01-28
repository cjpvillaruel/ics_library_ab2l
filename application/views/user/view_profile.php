<!-- view for the administrator's homepage after logging in -->

<html>

<body>
<div id = 'info'>
	<?php
	
		foreach ($results as $row) {
			$fullName = $row->first_name." ".$row->middle_initial." ".$row->last_name;
			echo "<p>Name: ".$fullName."</p>";
			
			echo "<p>College: ".$row->college."</p>";
			echo "<p>Email: ".$row->email."</p>";
			echo "<p>Classification: ".$row->classification."</p>";
			
			if($row->classification==="student"){
				echo "<p>Student: ".$row->account_number."</p>";
				echo "<p>Course: ".$row->course."</p>";
			}
			else{
				echo "<p>Faculty: ".$row->account_number."</p>";
			}
			$stat = $row->status;
			echo "<p>Status: ";
			if($stat === "approve"){
			echo "Registered"."</p>";
			}
			else{
			echo "Not yet Approved"."</p>";
		    }
				
		}

	?>
</div>
<a href= "controller_home/logout">Logout</a>
</body>
</html>