<?php 
	 include 'config.php';

	 if (isset($_POST['drConfirm'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$doctor = $_POST['doctor'];
		$bookingDate = $_POST['bookingDate'];
		$message = $_POST['message'];
		


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../medical_emergency.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['doctor'])) {
	        $valid = 0;
	        $error_message .= "Choose a Doctor";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['bookingDate'])) {
	        $valid = 0;
	        $error_message .= "Please Book a Date";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }
	    
	    
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO doctor_reservation(name,email,phone,doctor,bookingDate,message) VALUES (?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$doctor,$bookingDate,$message));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['doctor']);
        	unset($_POST['bookingDate']);
        	unset($_POST['message']);
	        $success_message = 'Hurray';  

	        header("location: ../medical_emergency.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}




	//Cabin Booking //////////////////////////////////////////////////////////////////////////////////////////////////

	if (isset($_POST['cabinConfirm'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$hospital = $_POST['hospital'];
		$bookingDate = $_POST['bookingDate'];
		$message = $_POST['message'];
		


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../medical_emergency.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['hospital'])) {
	        $valid = 0;
	        $error_message .= "Choose a hospital";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['bookingDate'])) {
	        $valid = 0;
	        $error_message .= "Please Book a Date";
	        header("location: ../medical_emergency.php?error_message=".$error_message);
	        exit();
	    }
	    
	    
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO cabin_reservation(name,email,phone,hospital,bookingDate,message) VALUES (?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$hospital,$bookingDate,$message));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['hospital']);
        	unset($_POST['bookingDate']);
        	unset($_POST['message']);
	        $success_message = 'Hurray';  

	        header("location: ../medical_emergency.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}
 ?>