<?php 
	include 'config.php';

	if (isset($_POST['carConfirm'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pickup = $_POST['pickup'];
		$pickupDate = $_POST['pickupDate'];
		$dropoff = $_POST['dropoff'];
		$dropoffDate = $_POST['dropoffDate'];
		

		$carType = checkCarType($id);


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../car_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../car_reserve.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../car_reserve.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../car_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['pickupDate'])) {
	        $valid = 0;
	        $error_message .= "Pick Check In Date";
	        header("location: ../car_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['dropoffDate'])) {
	        $valid = 0;
	        $error_message .= "Pick Check Out Date";
	        header("location: ../car_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO car_reservation(name,email,phone,carType,pickup,pickupDate,dropoff,dropoffDate) VALUES (?,?,?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$carType,$pickup,$pickupDate,$dropoff,$dropoffDate));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['pickup']);
        	unset($_POST['pickupDate']);
        	unset($_POST['dropoff']);
        	unset($_POST['dropoffDate']);
	        $success_message = 'Hurray';  

	        header("location: ../car_reserve.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}

	function checkCarType($id)
	{
		
		switch ($id) {
			//Supreme Room
			case 'ACCar':
				return "AC Car";
				break;
			case 'ProboxCar':
				return "Probox Car";
				break;
			case 'EconomicSedan':
				return "Economic Sedan";
				break;
			case 'AllionSedan':
				return "Allion Sedan";
				break;
			case 'ToyotaCorollaAxio':
				return "Toyota Corolla Axio";
				break;
			case 'Filder':
				return "Filder";
				break;
			case 'TownAceNoah':
				return "TownAce Noah";
				break;
			case 'HighAceMicro':
				return "HighAce Micro";
				break;
			case 'ToyotaNoah':
				return "Toyota Noah";
				break;
			case 'Mercedes':
				return "Mercedes";
				break;
			case 'Pajero':
				return "Pajero";
				break;
			case 'RangeRover':
				return "Range Rover";
				break;

			
			default:
				return "Car Type is not Specified";
				break;
		}

	}


	


 ?>