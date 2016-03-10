$(document).ready(function() {

	// Map
	$("#spain").click(function() {
  		$("#hostels-map-content").hide();
  		$("#spain-map-content").show();
	});

	$("#salobrena").click(function() {
		$("#hotel-salobrena").show();
		$("#hotel-madrid").hide("slow");
		$("#hotel-barcelone").hide("slow");
	});

	$("#barcelone").click(function() {
		$("#hotel-barcelone").show();
		$("#hotel-madrid").hide("slow");
		$("#hotel-salobrena").hide("slow");
	});

	$("#madrid").click(function() {
		$("#hotel-madrid").show();
		$("#hotel-barcelone").hide("slow");
		$("#hotel-salobrena").hide("slow");
	});

	// Calendar
	$('#calendar').fullCalendar({
    	weekends: false
	});
});