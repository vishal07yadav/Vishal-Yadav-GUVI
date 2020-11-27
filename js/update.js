function insertData() {
	var Mobile = $("#Mobile").val();
	var Profession = $("#Profession").val();
	var Language = $("#Language").val();
	var DOB = $("#DOB").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "updateDetails.php",
		data: {Mobile:Mobile,Profession:Profession,Language:Language,DOB:DOB},
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