<?php 
	include 'config.php';

	if (isset($_POST['confirm'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$datein = $_POST['datein'];
		$dateout = $_POST['dateout'];
		$rooms = $_POST['rooms'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];
		

		$hotel = checkHotelName($id);
		$roomType = checkRoomType($id);


		$valid = 1;

	    if (empty($_POST['name'])) {
	        $valid = 0;
	        $error_message .= urlencode("Name field can not be empty");
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['email'])) {
	        $valid = 0;
	        $error_message .= 'Email address can not be empty';
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    } else {
	        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	            $valid = 0;
	            $error_message .= 'Email address is invalid';
	            header("location: ../room_reserve.php?error_message=".$error_message);
	            exit();
	        }
	    }
	    if (empty($_POST['phone'])) {
	        $valid = 0;
	        $error_message .= "Phone field can not be empty";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['datein'])) {
	        $valid = 0;
	        $error_message .= "Pick Check In Date";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['dateout'])) {
	        $valid = 0;
	        $error_message .= "Pick Check Out Date";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    if (empty($_POST['rooms'])) {
	        $valid = 0;
	        $error_message .= "Please Select Number of Room";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }

	    if (empty($_POST['adults'])) {
	        $valid = 0;
	        $error_message .= "Please Select Number of Adults";
	        header("location: ../room_reserve.php?error_message=".$error_message);
	        exit();
	    }
	    

	    if ($valid == 1) {

	        // saving into the database
	        $statement = $pdo->prepare("INSERT INTO hotel_reservation(name,email,phone,hotel,roomType,datein,dateout,rooms,adults,children) VALUES (?,?,?,?,?,?,?,?,?,?)");
	        $statement->execute(array($name,$email,$phone,$hotel,$roomType,$datein,$dateout,$rooms,$adults,$children));

	   		unset($_POST['name']);
        	unset($_POST['email']);
        	unset($_POST['phone']);
        	unset($_POST['datein']);
        	unset($_POST['dateout']);
        	unset($_POST['rooms']);
        	unset($_POST['adults']);
        	unset($_POST['children']);
	        $success_message = 'Hurray';  

	        header("location: ../room_reserve.php?success_message=".$success_message);    
	    }

		// echo $hotel."<br>";
		// echo $roomType."<br>";
	}


	function checkHotelName($id)
	{
		if (substr($id, 0, 2) == 'sp') {
			return "Hotel Supreme";
		}else if(substr($id, 0, 2) == 'ga'){
			return "Hotel Garden Inn";
		}else if(substr($id, 0, 2) == 'nu'){
			return "Hotel Noorjahan Grand";
		}else if(substr($id, 0, 2) == 'ni'){
			return "Nirvana Inn";
		}else if(substr($id, 0, 2) == 'ss'){
			return "Hotel Star Pacific";
		}else if(substr($id, 0, 2) == 'ro'){
			return "Rose View Hotel";
		}else{
			return "Hotel Name is Not Valid";
		}
	}

	function checkRoomType($id)
	{
		switch ($id) {
			//Supreme Room
			case 'spDeluxeFamilyRoom':
				return "Deluxe Family Room";
				break;
			case 'spQueenSuit':
				return "Queen Suit";
				break;
			case 'spKingSuit':
				return "King Suit";
				break;
			case 'spTripleRoom':
				return "Triple Room";
				break;
			case 'spDeluxeDoupleTripleRoom':
				return "Deluxe Double/Triple Room";
				break;
			case 'spSuperiorDoubleRoom':
				return "Superior Double Room";
				break;

			// Garden In Room
			case 'gaStandardSingleRoom':
				return "Standard Single Room";
				break;
			case 'gaDeluxeDoubleRoom':
				return "Deluxe Double Room";
				break;
			case 'gaDeluxeFamilyRoom':
				return "Deluxe Family Room";
				break;
			case 'gaDeluxeQueenSuit':
				return "Deluxe Queen Suit";
				break;
			case 'gaApartment':
				return "Apartment";
				break;
			case 'gaDeluxeApartment':
				return "Deluxe Apartment";
				break;



			// Noorjahan Grand Room
			case 'nuBudgetSingleRoom':
				return "Budget Single Room";
				break;
			case 'nuDeluxeDoubleRoom':
				return "Deluxe Double Room";
				break;
			case 'nuDeluxeDoubleTwinRoom':
				return "Deluxe Double/Twin Room";
				break;
			case 'nuDeluxeLargeRoom':
				return "Deluxe Large Room";
				break;
			case 'nuDeluxeApartment':
				return "Deluxe Apartment";
				break;
			case 'nuKingSuit':
				return "King Suit";
				break;



			// Nirvana Inn Room
			case 'niDeluxeFamilyRoom':
				return "Deluxe Family Room";
				break;
			case 'niQueenSuit':
				return "Queen Suit";
				break;
			case 'niKingSuit':
				return "King Suit";
				break;
			case 'niTripleRoom':
				return "Triple Room";
				break;
			case 'niDeluxeDoubleTripleRoom':
				return "Deluxe Double/Triple Room";
				break;
			case 'niSuperiorDoubleRoom':
				return "Superior Double Room";
				break;



			// Star Pacific Room
			case 'ssPremiumQueenRoom':
				return "Premium Queen Room";
				break;
			case 'ssSuperiorDoubleRoom':
				return "Superior Double Room";
				break;
			case 'ssDeluxeQueenRoom':
				return "Deluxe Queen Room";
				break;
			case 'ssKingSuit':
				return "King Suit";
				break;
			case 'ssDeluxeTwinRoom':
				return "Deluxe Twin Room";
				break;
			case 'ssExecutiveSuit':
				return "Executive Suit";
				break;



			// Rose View Hotel Room
			case 'roDeluxeTwinRoom':
				return "Deluxe Twin Room";
				break;
			case 'roDeluxeSuit':
				return "Deluxe Suit";
				break;
			case 'roExecutiveSuit':
				return "Executive Suit";
				break;
			case 'roDeluxeFamilySuit':
				return "Deluxe Family Suit";
				break;
			case 'roPresidentialSuit':
				return "Presidential Suit";
				break;
			case 'roSuperiorDoubleRoom':
				return "Superior Double Room";
				break;


			
			default:
				return "Room Type is not Specified";
				break;
		}
	}

 ?>