 <?php


 include('server_connect.php');


$arr_times_av = array(
	'09:00am', '9:30am', '10:00am','10:30am', '12:00pm', '12:30pm','01:00pm', '01:30pm','02:00pm','02:30pm', '03:00pm', '03:30pm','04:00pm', '04:30pm','05:00pm', 
	'05:30pm', '06:00pm', '06:30pm');

 if(isset($_POST['date']) || isset($_POST['empl']) ){
 	$return_arr = (array)null;
 	$ee_empl = $_POST['empl'];
 	$ee_dat = $_POST['date'];
 	$current_date = date("m/d/o");
 	$stmt = "SELECT * FROM `client_upgrade` WHERE Per_stylist='$ee_empl' AND App_Date='$ee_dat';";

 	if($result = mysqli_query($connection, $stmt)) {
 		if(mysqli_num_rows($result) > 0){
 			while($row = mysqli_fetch_assoc($result)){
 				$conflict_t = $row['App_Time'];
 				for($i = 0; $i < count($arr_times_av); $i++){
 					if($conflict_t === $arr_times_av[$i]){
 						unset($arr_times_av[$i]);
 						continue;
 						// Undefined ref at index 4
 						// Because we dont define via keys 1 => 'var'
 						// Only error as of now
 					}
 				}
 				

 			}

 		}else{
 			echo 'ROWS';
 			exit();
 		}


 	}else{
 		echo $result;
 		exit();
 	}

 	echo ( json_encode($arr_times_av) );
 	exit();

 }
