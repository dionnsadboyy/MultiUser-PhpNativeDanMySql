<?php 

include('connection.php');

if(isset($_POST['submit']))
{
	date_default_timezone_set('Asia/Kolkata');
	
	$sql="insert into users (uname,upwd,role,added_date) values ('".$_POST['uname']."','".$_POST['upwd']."','".$_POST['role']."','".date('Y-m-d h:i:s')."')";
	
	$result=mysqli_query($conn,$sql);
	
	if($result)
	{
		echo 'inserted';
	}
	else 
	{
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Registration form</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="uname">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="upwd">
    </div>
   
     <div class="mb-3">
      <label for="pwd">Role:</label>
      <select class="form-control" name="role">
	  <option>Select Role</option>
	   <option value="hr">HR</option>
	    <option value="digital-marketing">Digital Marketing</option>
	  </select>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
