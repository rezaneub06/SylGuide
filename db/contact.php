<?php 
	include 'config.php';

	$name = "";
	$email = "";
	$phone = "";
	$msg = "";

	$error_message = "";
	$success_message = "";

	if (isset($_POST['submit'])) {

		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../index.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../index.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../index.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../index.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['msg'])) {
	        $valid = 0;
	        $error_message .= "You Should Write a Message";
	        header("location: ../index.php?error_message=".$error_message);
	        exit();
	    }
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO clients(name,email,phone,msg) VALUES (?,?,?,?)");
	        $statement->execute(array($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['msg'] ));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['msg']);
	        $success_message = 'Thank You For Contacting Us.';  

	        header("location: ../index.php?success_message=".$success_message);    
	    }
		
	}
?>