<?php

session_start();

if (isset($_POST['submit']))
 {
	include_once 'config.php';

	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$password= mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($email) || empty($password)) {
		header("Location: login.php?login=username and password cannot be empty");
		exit();
	}
	else
	{
		$sql="select * from users where email='$email';";
		$result=mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);


		if ($resultCheck<1) {
			header("Location: login.php?login=noUsernameExist");
			exit();
		}
		else
		{
			$row=mysqli_fetch_assoc($result);
			if($password==$row['password'])
			{
						$_SESSION['u_id'] = $row['id'];
						$_SESSION['u_first'] = $row['firstname'];
						$_SESSION['u_last'] = $row['lastname'];
						$_SESSION['u_email'] = $row['email'];
		
						header("Location:index.php?login=success");
						exit();					

			}
			else{
					header("Location:login.php?login=wrong password");
					exit();
			}
		}

	}

}
else
{
	header("Location:login.php?login=invalid access");
	exit();
}

?>