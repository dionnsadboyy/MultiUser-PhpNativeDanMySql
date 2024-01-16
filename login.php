<?php 

session_start();

include('connection.php');

if(isset($_POST['submit']))
{
	$sql="select * from users where uname='".$_POST['uname']."' AND upwd='".$_POST['upwd']."'";
	
	$result=mysqli_query($conn,$sql);
	$data=mysqli_fetch_array($result);
	
	//print_r($data);
	
	if(!empty($data))
	{
		$_SESSION['user_role']=$data['role'];
		$_SESSION['username']=$data['uname'];
		
		header('location:dashboard.php');
		
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login | SaptaRepairELEKTRONIK</title>
</head>
<body>

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>
            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <form method="post">

                <!-- <form action="login_process.php" method="POST"> Update the action attribute with your processing script -->
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Hello, Again</h2>
                            <p>We are happy to have you back.</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="uname">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="upwd">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <!-- your existing code -->
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

