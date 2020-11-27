function insertData() {
	var curr = $("#curr").val();
	var pwd = $("#pwd").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "changePwd.php",
		data: {curr:curr,pwd:pwd},
		dataType: "JSON",
		success: function(data) {
			$("#message").html(data);
			$("#message").css("color", "green");
			$("#message").css("font-size", "22px");
			//$("#message").addClass("alert alert-success");
		},
		error: function(err) {
			$("#message").html(err);
			$("#message").css("color", "red");
			$("#message").css("font-size", "22px");
		}
	}); 
}