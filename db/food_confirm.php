<?php 
	include 'config.php';

	if (isset($_POST['foodConfirm'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$restaurant = $_POST['restaurant'];
		$person = $_POST['person'];
		$bookingDate = $_POST['bookingDate'];
		$bookingTime = $_POST['bookingTime'];
		$message = $_POST['message'];
		

		//$restaurant = preg_replace('/\s+/', '_', $restaurant);
		$restaurant = checkRestaurant($restaurant);


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../food_gallery.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../food_gallery.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../food_gallery.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../food_gallery.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['bookingDate'])) {
	        $valid = 0;
	        $error_message .= "Pick Book a Date";
	        header("location: ../food_gallery.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['bookingTime'])) {
	        $valid = 0;
	        $error_message .= "Pick Choose Your Prefer Time time";
	        header("location: ../food_gallery.php?error_message=".$error_message);
	        exit();
	    }
	    
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO food_reservation(name,email,phone,restaurant,person,bookingDate,bookingTime,message) VALUES (?,?,?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$restaurant,$person,$bookingDate,$bookingTime,$message));

	        print_r($_POST);

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['restaurant']);
        	unset($_POST['bookingDate']);
        	unset($_POST['bookingTime']);
        	unset($_POST['person']);
	        $success_message = 'Hurray';  

	        header("location: ../food_gallery.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}

	function checkRestaurant($restaurant)
	{
		switch ($restaurant) {
			//Supreme Room
			case 'Panshi_Restaurant':
				return "Panshi Restaurant";
				break;
			case 'Pachvai_Restaurant':
				return "Pachvai Restaurant";
				break;
			case 'Vujonbari_Restaurant':
				return "Vujonbari Restaurant";
				break;
			case 'Palki_Restaurant':
				return "Palki Restaurant";
				break;
			case 'Kazi_Asparagus_Restaurant':
				return "Kazi Asparagus Restaurant";
				break;
			

			
			default:
				return "Car Type is not Specified";
				break;
		}


	}
 ?>