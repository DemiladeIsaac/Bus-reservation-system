<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
    $msg = "";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) {array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: UserPage.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: UserPage.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

    if(isset($_POST['check'])) {
        
        $sql="SELECT username FROM reservation";
        $from = mysqli_real_escape_string($db, $_POST['from']);
        $to = mysqli_real_escape_string($db, $_POST['to']);
        $_SESSION['FROM'] = $from;
        $_SESSION['TO'] = $to;
        if ($result=mysqli_query($db,$sql))
      {
          // Return the number of rows in result set
          $rowcount=mysqli_num_rows($result);
          //printf("Result set has %d rows.\n",$rowcount);
          if($rowcount < 20){
              //array_push($msg, "Some seats can still be booked");
              $msg = "Some seats can still be booked";
          }else if($rowcount == 20){
              //array_push($msg,"No more space in the bus");
              $msg = "No more space in the bus";
          }else{
             // array_push($msg,"Something went wrong with the check");
              $msg = "Something went wrong";
          }
          // Free result set
          mysqli_free_result($result);
      }
    }

	if (isset($_POST['book'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['Name']);
		$cvv = mysqli_real_escape_string($db, $_POST['cvv']);
		$cardno = mysqli_real_escape_string($db, $_POST['Card-Number']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) {array_push($errors, "Name is required"); }
		if (empty($cvv)) { array_push($errors, "CVV is required"); }
		if (empty($cardno)) { array_push($errors, "Card Number is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO reservation (username, cvv, cardno) 
					  VALUES('$username', '$cvv', '$cardno')";
			mysqli_query($db, $query);

			header('location: receipt.php');
		}

	}

?>