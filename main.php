<?php

date_default_timezone_set("America/Los_Angeles");
$current_date = date("m/d/o");



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Name</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
  	<link href = "https://code.jquery.com/ui/1.10.4/themes/cupertino/jquery-ui.css" rel = "stylesheet">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	 <script src="https://kit.fontawesome.com/fd1affcb0c.js" crossorigin="anonymous"></script>
  	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Montserrat:wght@100&family=Nunito&display=swap" rel="stylesheet">
  	<link href="static/main_style.css" rel="stylesheet">

</head>

<?php

if(isset($_GET['lost_spot'])){
	echo '<script type="text/javascript">
		$(document).ready(function() {
			$("#lost_spot_modal").modal("show");
		});
    </script>';

}


?>


<nav class = "navbar navbar-expand-md navbar-dark ">
	<div class="container-fluid">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"> </span>
	</button>
	<div class="collapse navbar-collapse" id ="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Stylist</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" id="about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"id="help">Help</a>
			</li>

		</ul>
	</div>
	</div>
</nav>


<div class="modal fade" id="lost_spot_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Oh No!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="refreshPage();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id = "body_err">
       Looks like someone beat you for your appointment! Try another time, we are very popular!
       Thanks!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="refreshPage();">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="hero-image">
  <div class="hero-text">
  	<div class="icon">
  		<a href="main.html" class="logo">
  			<img src="static/img/icons/flower.png" style="height: 90px; width: 90px;">
  		</a>
     </div>
    <h1 class="display-4">Store Name</h1>
    <h1 class="display-4">BEAUTY SALON</h1>
  </div>
</div>


<div class="container-fluid padding" id="covid">
  <h2 class="center-text-title text-center">Covid-19 Responce</h2>
  <p class="lead text-center">To Minimize The Spread We Pleadge Too</p>
  <hr class="small_hr">
  <div class="row d-flex text-center">
      <div class=" col-sm">
        <i class="fas fa-hand-sparkles fa-3x"></i>
        <h3>Clean Facilties</h3>
        <p>Distance From Other Guest, Mask Required</p>
      </div>
      <div class=" col-sm">
        <i class="fas fa-pump-medical fa-3x"></i>
        <h3>Sanitized Equipment</h3>
        <p>Clean Equipment & Sanitize From Each Use</p>
      </div>
      <div class=" col-sm">
        <i class="fas fa-hand-holding-usd fa-3x"></i>
        <h3>Contact Less Payments</h3>
        <p>Contactless</p>
      </div>
    </div>
</div>



 <div class="container-fluid">
 	<div class="title text-center">
        <h2 class="mb-4">Our Work</h2>
        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
 </div>



<!--- Containers Cards -->


<div class="container-fluid" id="show_work">
<div class="row padding">
	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src="static/img/work-2.jpg">
			<div class="card-body">
				<h4 class="card-title">Haircuts</h4>
				<button href="#" class="btn btn-primary" id="work1">Show Work</button>
			</div>
		</div>
	</div>

<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src= "static/img/work-3.jpg">
			<div class="card-body">
				<h4 class="card-title">Woman Styling</h4>
				<button href="#" class="btn btn-primary" id="work2">Show Work</button>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src= "static/img/work-1.jpg">
			<div class="card-body">
				<h4 class="card-title">Women Color</h4>
				<button href="#" class="btn btn-primary" id="work3">Show Work</button>
			</div>
		</div>
	</div>


	<div class="col-md-3">
		<div class="card">
			<img class="card-img-top" src= "static/img/work-3.jpg">
			<div class="card-body">
				<h4 class="card-title">Waxing</h4>
				<button href="#" class="btn btn-primary" id="work4">Show Work</button>
			</div>
		</div>
	</div>
</div>
</div>


 <div class="container-fluid">
 	<div class="title text-center">
        <h2 class="mb-4">Our Pricing</h2>
        <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
 </div>


 <div class="container-fluid">
 	<div class="row padding">
 		<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
		<div class="card" id="card1">
			<div class="card-body">
			
				<div class="text-center">
					<h3 class="subthindark">Basic</h3>
	        		<p><span class="price">$24.50</span> <span class="per">/ one trip</span></p>
	        	</div>
				<ul class="list-group">
        			<li class="list-group-item text-center">Nail Cutting &amp; Styling</li>
					<li class="list-group-item text-center">Hair Trimming</li>
					<li class="list-group-item text-center">Spa Therapy</li>
					<li class="list-group-item text-center">Body Massage</li>
					<li class="list-group-item text-center">Manicure</li>
        		</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
		<div class="card" id="card2">
			
			<div class="card-body">
				
				<div class="text-center">
					<h3 class="subthindark">Standard</h3>
	        		<p><span class="price">$44.50</span> <span class="per">/ one trip</span></p>
	        	</div>
				<ul class="list-group">
        			<li class="list-group-item text-center">Nail Cutting &amp; Styling</li>
					<li class="list-group-item text-center">Hair Trimming</li>
					<li class="list-group-item text-center">Spa Therapy</li>
					<li class="list-group-item text-center">Body Massage</li>
					<li class="list-group-item text-center">Manicure</li>
        		</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4 ftco-animate fadeInUp ftco-animated">
		<div class="card" id="card3">
			
			<div class="card-body">
			
				<div class="text-center">
					<h3 class="subthindark">Premium</h3>
	        		<p><span class="price">$64.50</span> <span class="per">/ one trip</span></p>
	        	</div>
				<ul class="list-group">
        			<li class="list-group-item text-center">Nail Cutting &amp; Styling</li>
					<li class="list-group-item text-center">Hair Trimming</li>
					<li class="list-group-item text-center">Spa Therapy</li>
					<li class="list-group-item text-center">Body Massage</li>
					<li class="list-group-item text-center">Manicure</li>
        		</ul>
			</div>
		</div>
	</div>

 	</div>	
</div>


<section class="ftco-partner bg-light">
    	<div class="container">
    		<div class="row partner justify-content-center">
    			<div class="col-md-10">
    				<div class="row">
		        	<div class="col-md-3">
		        		<a href="#" class="partner-entry">
		        			<img src="static/img/partner-1.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3">
		        		<a href="#" class="partner-entry">
		        			<img src="static/img/partner-2.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3">
		        		<a href="#" class="partner-entry">
		        			<img src="static/img/partner-3.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
		        	<div class="col-md-3">
		        		<a href="#" class="partner-entry">
		        			<img src="static/img/partner-4.jpg" class="img-fluid" alt="Colorlib template">
		        		</a>
		        	</div>
	        	</div>
	        </div>
        </div>
    	</div>
    </section>

<div class="jumbotron">
	<h1 class="header">Save Time, Check In Online</h1>
    <h1 class="sub_header">- Same day appointments avaiable, depending on how booked a stylist.</h1>
    <h1 class="sub_header">- Please arrive 10 mintues before appointment time.</h1>
</div>


<div class="container-fluid"id="appointments">
		<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex align-items-center">
    			<div class="col-md-2"></div>
	    		<div class="col-md-4 d-flex align-self-stretch">
	    			<div class="appointment-info text-center p-5">
	    				<div class="padd">
	    					<h3 class="header_title">Address</h3>
		    				<h4 class="adr"> 203 Fake St. Mountain View, San Francisco, California, USA</h4>
		    				
	    				</div>
	    				<div class="padd">
		    				<h3 class="header_title">Phone</h3>
		    				<p class="adr">000 123 456</p>

	    				</div>
	    				<div>
		    				<h3 class="header_title">Opening Hours</h3>
		    				<p class="adr">Monday - Friday</p>
		    				<p class="adr">08:00am - 09:00pm</p>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="col-md-6 appointment pl-md-5">
	    			<h3 class="apt_title">Appointments</h3>
	    	<form action="make_appointment.php" method="post">
	            <div class="row form-group d-flex">
	            	<div class="col-md-6">
	            		<input type="text" class="form-control no-border" placeholder="First & Last" id="name" name="name" required="">
	            		<hr class= "w-hr">
	            	</div>
	            	<div class="col-md-6">
	            		<input type="text" class="form-control no-border" placeholder="Email" id="email" name="email" required="">
	            		<hr class= "w-hr">
	            	</div>
	            </div>
	            <div class="row form-group d-flex">
	            	<div class="col-md-6">
	            		<input type="text" class="form-control no-border" placeholder="Phone" id="phone" name="phone" required="">
	            		<hr class= "w-hr">
	            	</div>
	            	<div class="col-md-6">
	            		
	              		<input type="text" value="" class="form-control no-border" id="time" name="time" readonly required="">
	           			<hr class="w-hr">
	            	</div>
	            </div>
	            <div class="row form-group d-flex">
	            <div class="col-md-6">
	            	<select class="form-control" id="employee-id" name="empl" required>
					        <option value="None">Perferred stylist</option>
					        <option value="Stacy">Stacy Carrol</option>
					        <option value="Sam">Sam Jr</option>
					        <option value="Mary">Mary Jane</option>
					        <option value="Emily">Emily Valdovinos</option>
					        <option value="Karen">Karen Mayne</option>
	          		</select>
	          		<hr>
	            </div>
		            <div class="col-md-6">
		              <div class="form-group">
	                    <input type="text" class="form-control no-border" placeholder="Date" id="calendar" name="date" required="">

		              <hr class= "w-hr">
		            </div>
		        	</div>
	        	</div>

	        	<div class="row form-group d-flex">
	        		<div class="col-md-6">
	        			<div class="form-group">
	        				<input class="btn btn-primary" type="submit" value="Check Available Times" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" id="check_tm">
  							
	        			</div>
	        		</div>
	        	</div>


	            <div class="form-group">
	              <input type="submit" value="Make Appointment" class="btn btn-primary" id="create_app" name="clicked">
	            </div>

	          </form>
	    		</div>  

    		</div>
    	</div>
    </div>



<div class="collapse" id="check_av_times">
  <div class="card card-body">
  	<div class="card card-title" id="time_title_message">
  		<h2 class="header" id="av_title">All Available Times</h2>
  		<h3 class="sub_header">Act Fast, Dont Loose Your Spot!</h3>
  	</div>
  			
			<div class="row btn-group d-flex">	
				<div class="btn-group-vertical" role="group" id="available_times" aria-label="Basic example">
				</div>	
			</div>
		
    	
  </div>
</div>



<div class="modal" tabindex="-1" role="dialog" id="instructions">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title header">Instructions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="sub_header">Please select the Date & Stylist to reveal their Availability.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">


function refreshPage() {
	location.assign("main.php");
	return false;

}


    console.log("Working");
    $(document).ready(function() {
    	$('#calendar').datepicker({
    		beforeShowDay: nonWorkingDates,
        	numberOfMonths: 1,
        	minDate: '0',
        	maxDate: '2w+5d',
        	firstDay: 1
        	
    	});

    });
   

// You need to make the button smaller, to large to fit 
var time = null;
function add(id) {
  //Create an input type dynamically.   
  var element = document.createElement("Button");
  //Assign different attributes to the element. 
  element.type = "button";
  element.value = id; // Really? You want the default value to be the type string?
  element.name = id; // And the name too?
  element.innerHTML = id;
  element.className = "btn btn-primary";
  element.onclick = function() { // Note this is a function
   	document.getElementById("time").value = element.name;
  };


  var avaiable_times_div = document.getElementById("available_times");
  //Append the element in page (in span).  
  avaiable_times_div.appendChild(element);
}


function remove_leftover(){
	const node = document.getElementById("available_times");
	while(node.firstChild){
		node.removeChild(node.lastChild);
	}
}


function convert_time(hour, min){
	var h = hour;
	var m = min;
	var del_val = null;
	if(hour >= 12){
		h = h - 12;
		del_val = "pm";
	}
	if(hour == 0){ h = 12; }
	if(hour < 12){ del_val = "am"; }
	return [h,min,del_val];
}

function get_today(){
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	return today = mm + '/' + dd + '/' + yyyy;
}


function remove_based_time(lastVal, currDate){
	if(currDate == get_today()) {
		var date = new Date();
		var h = date.getHours();
		var m = date.getMinutes();
		var complete = convert_time(h,m);

		if(lastVal == null){
			return false;
		}
		// Last Array value
		var splitArr = lastVal.split(":");
		var hhr = splitArr[0]; // Last Array Value Hour EX: 6:00:pm
		var mmr = splitArr[1]; // Last Array Value Minute
		var ap = splitArr[2]; // No Need to check

		if(complete[0] > hhr && complete[3] == ap){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}	
}
    

    $(document).ready(function(){
    	$('#check_tm').on('click', function() {
    		remove_leftover();
    		var date = $('#calendar').val();
    		var stls = $('#employee-id').val();
    		document.getElementById("av_title").innerHTML = "All Available Times For " + stls;
    		if(date == "" || stls == "None"){
    			$('#instructions').modal('toggle');			
    		}else{
    			var date = $('#calendar').val();
    			var stls = $('#employee-id').val();
    			var xhr = $.ajax({
    				type:'POST',
        			url:'check_av_times.php',
        			timeout: 5000,
        			dataType: 'json',
        			data:{'date': date, 'empl': stls},

        			success: function(rdata) {
        				// Check Close time to make sure no values can be inserted before.
        				// Resolves glitch where php cannot handle
        				// php removes app and before app, but not closing hours.
        				var checkLast = rdata.pop();
        				if(remove_based_time(checkLast,date)){
        					add("No Times Available");
        					$('#check_av_times').collapse('toggle');
        				}else{
        					for (i = 0 ; i < rdata.length; i++){
        					add(rdata[i]);
        				}
        					$('#check_av_times').collapse('toggle');

        				}
        			    
        			}, 
        			error: function(err, code) {
        				console.log(err);
        				console.log(code);
        				
        			}
    			});	
    		}
    		
    	});
    		
    });

    $('#check_av_times').on('show.bs.collapse', function () {

	});



  
    

    function isEmpty(str) {
    	return (!str || 0 === str.length);
	}


     function nonWorkingDates(date){
        var day = date.getDay(), Sunday = 0, Monday = 1, Tuesday = 2, Wednesday = 3, Thursday = 4, Friday = 5, Saturday = 6;
        var closedDates = [[7, 29, 2009], [8, 25, 2010]];
        var closedDays = [[Sunday], [Saturday]];
        for (var i = 0; i < closedDays.length; i++) {
            if (day == closedDays[i][0]) {
                return [false];
            }

        }

        for (i = 0; i < closedDates.length; i++) {
            if (date.getMonth() == closedDates[i][0] - 1 &&
            date.getDate() == closedDates[i][1] &&
            date.getFullYear() == closedDates[i][2]) {
                return [false];
            }
        }

        return [true];
    }

function show_modal(title,body){
  document.getElementById('title_config').innerHTML = title;
  document.getElementById('body_config').innerHTML = body;
  $("#configure_modal").modal("show");
}
    	



    </script>



<div class="modal fade" id="configure_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_config">Refresh Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id= "body_config">
        Looks like we have a timeout error, please check if you are connected to the internet. Or try to refresh the entire page.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-3">
			<h5 class="footer_title">Have Questions?</h5>
			<hr class="small_hr">
			<p>909-572-5474</p>
			<p>someemail@gmail.com</p>
			<p>1988 W something Drive</p>
			<p>Beverly Hills Ca, 92400</p>
			<hr class="small_hr">
		</div>

		<div class="col-md-3">
			<h5 class="footer_title">Our Hours</h5>
			<hr class="small_hr">
			<p>Monday: 9am-6pm</p>
			<p>Tuesday: 9am-6pm</p>
			<p>Wednesday: 9am-6pm</p>
			<p>Thursday: 9am-6pm</p>
			<p>Friday: 9am-6pm</p>
			<p>Saturday: 9am-6pm</p>
			<p>Sunday: Closed</p>
			<hr class="small_hr">

		</div>
		<div class="col-md-3">
			<h5 class="footer_title">Software Opportunities</h5>
			<hr class="small_hr">
			<p>otfgonzalez@gmail.com</p>
			<p>909-572-5474</p>
			<hr class="small_hr">
		</div>

		<div class="col-md-3">
            <div class="container text-center">
              <h2 class="footer_title">About Us</h2>
              <hr class="small_hr">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            	<hr class="small_hr">
                <a href="#"><img src="static/img/icons/twitter_icon.png" style="height: 50px; width: 50px;"></a>
                <a href="#"><img src="static/img/icons/facebook_icon.png" style="height: 50px; width: 50px;"></a>
                <a href="#"><img src="static/img/icons/instagram_icon.png" style="height: 50px; width: 50px;"></a>
            
            </div>
            <hr class="small_hr">
          </div>


		</div>
	</div>
</footer>




    


</html>