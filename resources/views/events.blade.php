@extends('layouts.app')
@section('content')
	<section id="event-banner">
		<div class="event-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 p-3">
						<div class="contact-detail mt-5">
							<h4>Events</h4>	
							<q>A goal without a plan is just a wish.</q>  	
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 text-center p-3">
						<div class="banner-img">
							<img src="image/events.svg" class="img-fluid">
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card event-card">
			          	<button data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="event_id()"> 
			          		<div class="d-flex">
				            	<div class="event-date-box">
				              	<div class="event-date m">
				                	<h2 class="date"></h2>
				                	<p class="month"></p>
				              	</div>
				            	</div>
					            <div class="event-detail-box">
					              <h5 class="event-title"></h5>
					              <span class="badge rounded-pill"><i class="fa fa-calendar" style="color: #fff"></i> </span>
				                <span class="badge rounded-pill"><i class="fa fa-clock-o" style="color: #fff"></i> </span>
				                <span class="badge rounded-pill"><i class="fa fa-map-marker" style="color: #fff;"></i> </span>
							    		</div>
					        	</div>
			          	</button>
				    </div>
			    </div>
			</div>	
		</div>	
	</section>

	<!---------Event modal----------->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">Event Detail</h5>
	        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      		</div>
		      	<div class="modal-body">
		       		<div class="card mt-0">
		            	<img src="" class="card-img-top" id="event-image">
		            	<div class="card-body event-modal">
		                  <h5 class="card-title" id="event-title"></h5>
		                  <p class="card-text" id="event-description"></p>
		                  <span class="badge rounded-pill"><i class="fa fa-calendar" style="color: #fff"></i> <span id="date" style="color: #fff"> </span></span>
		                  <span class="badge rounded-pill"><i class="fa fa-clock-o" style="color: #fff"></i><span id="time" style="color: #fff"> </span></span>
		                  <span class="badge rounded-pill "><i class="fa fa-map-marker" style="color: #fff;"></i><span id="address" style="color: #fff"> </span></span>
		                </div>
			        </div>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
		      	</div>
	    	</div>
	  	</div>
	</div>

	<script type="text/javascript">
	  function event_id(event_id)
	  {
	    var event_id;
	    var object;
	    if(window.XMLHttpRequest)
	    {
	      object = new XMLHttpRequest();
	    } 
	    else
	    {
	      object = new ActiveXObject('Microsoft.XMLHTTP');
	    }
	    object.onreadystatechange = function()
	    {
	      if (object.readyState == 4 && object.status == 200)
	      {
	        var result = object.responseText;
	        record_array = result.split('=');
	        document.getElementById('event-image').src = record_array[0];
	        document.getElementById('event-title').innerHTML = record_array[1];
	        document.getElementById('event-description').innerHTML = record_array[2]; 
	        document.getElementById('date').innerHTML = record_array[3]; 
	        document.getElementById('time').innerHTML = record_array[4];
	        document.getElementById('address').innerHTML = record_array[5];
	      }
	    }
	    object.open('GET','process.php?view_event_id='+event_id);
	    object.send();  
	  }
	</script>
@endsection