function insertData() {
	var Name = $("#Name").val();
	var Email = $("#Email").val();
	var Mobile = $("#Mobile").val();
	var Message = $("#Message").val();
			 
	// AJAX code to send data to php file.
	$.ajax({
		type: "POST",
		url: "query.php",
		data: {Name:Name,Email:Email,Mobile:Mobile,Message:Message},
		dataType: "JSON",
		success: function(data) {
			$("#message").html(data);
			$("#message").css("color", "green");
			$("#message").css("font-size", "22px");
		},
		error: function(err) {
			$("#message").html(err);
			$("#message").css("color", "red");
			$("#message").css("font-size", "22px");
		}
	}); 
}

/*$('#queryform').validation({
			rules:[
			{
				input: '#Name',
				message: 'Name is required',
				action: 'keyup, blur',
				rule: 'required'
			}
			{
				input: '#Email',
				message: 'Email Address is required',
				action: 'keyup, blur',
				rule: 'required'
			}
			{
				input: '#Mobile',
				message: 'Mobile Number is required',
				action: 'keyup, blur',
				rule: 'required'
			}
			{
				input: '#Message',
				message: 'Message is required',
				action: 'keyup, blur',
				rule: 'required'
			}
			],
			theme: theme
		});
		$('#queryform').on('submit', function(){
			return $('#queryform').validation('validate');
		});*/