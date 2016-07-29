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

	req.send(vars);
}

function addTicket () {
	
	// Create our XMLHttpRequest object
	var req = new XMLHttpRequest();
	
	// Create some variables we need to send to our PHP file
	var url = "saveTicket.php";
	var maker = document.getElementById("maker").value;
	var worker = document.getElementById("worker").value;
	var description = document.getElementById("description").value;


	var vars = "maker="+maker+"&worker="+worker+"&description="+description;

	req.open("POST", url, true);

	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	req.send(vars);
}