function addUser () {
	
	// Create our XMLHttpRequest object
	var req = new XMLHttpRequest();
	
	// Create some variables we need to send to our PHP file
	var url = "saveUser.php";
	var name = document.getElementById("name").value;
	var firstname = document.getElementById("firstname").value;
	var email = document.getElementById("email").value;
	var vars = "name="+name+"&firstname="+firstname+"&email="+email;

	req.open("POST", url, true);

	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	// Access the onreadystatechange event for the XMLHttpRequest object
	req.onreadystatechange = function() {
		if(req.readyState == 4 && req.status == 200) {
			document.getElementById('errorMessage').innerHTML = req.responseText;
		}
	}

	// Send the data to PHP now... and wait for response to update the status div
	req.send(vars);
}

function validate (inputEmail) {

}