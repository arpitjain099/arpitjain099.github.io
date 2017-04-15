$(document).ready(function() {
    console.log( "ready!" );
    $( "#loginbtn" ).click(function() {
	console.log("login");
$('#loginmodal').modal('toggle');
});

$( ".joineventindex" ).click(function() {
	console.log("take me to registration page");
	window.location.href="registration.html";
});


});

