function insertData() {
	var Email = $("#Email").val();
	var Password = $("#Password").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "logo.php",
		data: {Email:Email,Password:Password},
		dataType: "JSON",
		/*success: function(data) {
			$("#message").html(data);
			$("#message").addClass("alert alert-success");
		},*/
		error: function(err) {
			$("#message").html(data);
			$("#message").css("color", "red");
			$("#message").css("font-size", "22px");
		}
	}); 
}