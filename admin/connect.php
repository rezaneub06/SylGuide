<?php
   include '../db/config.php';


 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 $Fname=$_POST['name'];
 $Sname=$_POST['last'];
 $email=$_POST['Email'];
 $pass=$_POST['Password'];
 $repass=$_POST['Repassword'];

		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location:index.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['last'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: index.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../index.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['Password'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: index.php?error_message=".$error_message);
	        exit();
	    }
		 if (empty($_POST['Repassword'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location:index.php?error_message=".$error_message);
	        exit();
	    }
		if($valid = 1){
      $statement = $pdo->prepare("INSERT INTO admin(name,last,Email,Password,Repassword) VALUES (?,?,?,?,?)");
	   $statement->execute(array($Fname,$Sname,$email,$pass,$repass));

	        $success_message = 'Thank You For Contacting Us.';  

	        header("location:index.php?success_message=".$success_message);  
	}
	}
  ?>