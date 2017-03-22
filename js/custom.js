
	
	function getLocation() {
	    if (navigator.geolocation) {
	        navigator.geolocation.getCurrentPosition(showPosition);
	    } else {
	        x.innerHTML = "Geolocation is not supported by this browser.";
	    }
	}
	function showPosition(position) {
		  var currentlocation = {lat: position.coords.latitude, lng: position.coords.longitude};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 16,
	          minZoom: 16,
	          maxZoom: 18,
	          center: currentlocation
	        });
	        var marker = new google.maps.Marker({
	          position: currentlocation,
	          map: map
	});
	
	
	}
	
	
	function display(id){
		var x=document.getElementById(id);
		if(x.style.display === "none"){
		x.style.display = "block";
		}else{
			x.style.display = "none";
		}
	}
	
	
	


	
	
	
	
	
	
	
