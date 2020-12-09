	<?php 
	require_once('config.php');

	 ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Registration Form | PHP</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body>

		<div>
			<?php 
			if (isset($_POST['create'])) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$country = $_POST['country'];
				$password = $_POST['password'];

				$sql = "INSERT INTO users (firstname,lastname,email,contact,country,password) VALUES(?,?,?,?,?,?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$firstname, $lastname, $email, $contact, $country, $password]);

				if ($result) {
					echo 'Data Saved Successfully...';
				}else{
					echo 'There were error while saving the data..';
				}

				
			}

			 ?>
		</div>

		<div>
			<form action="registration.php" method="post">
				<div class="container">

					<div class="row">
						<div class="col-sm-8">
							<h1>SL DevCode Registration Form...!!</h1>
							<hr class="mb-3">
							<p>Welcome to SL DevCode Registration Form.</p>						
							<p>Fill up the form with correct values....</p>
							<hr class="mb-3">

							<label for="firstname"><b>First Name</b></label>
							<input class="form-control" type="text" name="firstname" required>

							<label for="lastname"><b>Last Name</b></label>
							<input class="form-control" type="text" name="lastname" required>

							<label for="email"><b>Email Address</b></label>
							<input class="form-control" type="email" name="email" required>

							<label for="contact"><b>Contact NO</b></label>
							<input class="form-control" type="text" name="contact" required>

							<label for="country"><b>Country</b></label>
							<input class="form-control" type="text" name="country" required>

							<label for="password"><b>Password</b></label>
							<input class="form-control" type="password" name="password" required>
							<hr class="mb-3">

							<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
					    </div>
					</div>
				</div>
			</form>
		</div>

	</body>
	</html>