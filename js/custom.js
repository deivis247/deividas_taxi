
	//map page
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
	
	//display
	function display(id){
		var x=document.getElementById(id);
		if(x.style.display === "none"){
		x.style.display = "block";
		}else{
			x.style.display = "none";
		}
	}
	
function hide1(id){
	var x= document.getElementById(id) 
	x.style.display("none");
	
}
	//direction
	
//directionsPage
var directionsDisplay;
var directionsMap;
var z = document.getElementById("direction");
var directionsLatLng;
var start;
var end;
var cld;
function getDirectionsLocation() {
	console.log("getDirectionsLocation");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showDirectionsPosition);
    } else {
        z.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showDirectionsPosition(position) {
	console.log("showDirectionsPosition");
  var  directionsLatitude = position.coords.latitude;
  var  directionsLongitude = position.coords.longitude;
    directionsLatLng = new google.maps.LatLng(directionsLatitude,directionsLongitude);
    getDirections();
}

function getDirections() {
	console.log('getDirections');
  directionsDisplay = new google.maps.DirectionsRenderer();
  //start = new google.maps.LatLng(directionsLatLng);
  var directionsOptions = {
    zoom:12,
    center: start
  }
  directionsMap = new google.maps.Map(document.getElementById("direction"), directionsOptions);
  directionsDisplay.setMap(directionsMap);
  calcRoute();
}

function calcRoute() {
	console.log("calcRoute");
  start = directionsLatLng;
  end = document.getElementById("pavadinimas").value;
  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
    	directionsDisplay.setDirections(result);
    	
    }
  });
}

	
	
	
	
	
	
	
