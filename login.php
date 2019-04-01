<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration </title>
	<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/media1.css">
</head>
<body>
    <div id="header">
        <h1>Welcome to <em>'RADEON'</em> Online shoping Center</h1>
    </div>
	<div class="container">
		<div class="row">
      	<div class="col-md-6">  
                <div class="fp1">
                    <h3 id="si">Login Here</h3>
                    <form action="validation.php" method="POST">
                        <div class="from-group">
                            <input type="text" name="email" placeholder="email" required="">
                        </div>
                        <div class="from-group1">
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <button type="submit" name="submit" class="btn2">Login</button>
                    </form>
                </div>  
			</div>
			<div class="col-md-6-1">  
                <div class="fp1">
                    <h3 id="si">Sign Up Here</h3>
                    <form action="registration.php" method="POST">
                        <div class="from-group2">
                            <input type="text" name="fname" placeholder="First Name" required="">
                        </div>
                        <div class="from-group3">
                            <input type="text" name="lname" placeholder="Last Name" required="">
                        </div>
                        <div class="from-group4">
                            <input type="text" name="email" placeholder="email" required="">
                        </div>
                        <div class="from-group5">
                            <input type="Password" name="password" placeholder="Password" required="">
                        </div>
                        <button type="submit" name="submit" class="btn2">Sign Up</button>
                    </form>
                </div>  
			</div>
		</div>
	</div>
</body>
</html>