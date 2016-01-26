/* 定位 */
var coordinate = '';
getLocation();
var position_option = {
	enableHighAccuracy:true,
	maximumAge:30000,
	timeout:20000
};
function getLocation(){
  if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition,showError,position_option);
  }else{
  	alert("Geolocation is not supported by this browser.");
  }
}
function showPosition(position){
  	Latitude =  position.coords.latitude;
  	Longitude  = position.coords.longitude;
    $.get('index.php?m=default&c=index&a=fixed', {Longitude:Longitude,Latitude:Latitude}, function(data) {}, 'json');
}
function showError(error){
}

