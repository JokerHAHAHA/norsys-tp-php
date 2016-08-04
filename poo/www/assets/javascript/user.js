function addUser () {

    console.log('coucou');
    // Create our XMLHttpRequest object
    var req = new XMLHttpRequest();
    
    // Create some variables we need to send to our PHP file
    var url = "index.php";
    var name = document.getElementById("name").value;
    var firstname = document.getElementById("firstname").value;
    var email = document.getElementById("email").value;
    var vars = "name="+name+"&firstname="+firstname+"&email="+email;

    // error email msg in the DOM
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status != 200) {
            document.getElementById('errorEmail').innerHTML = "Votre adresse e-mail n'est pas correcte";
        }
    };

    req.open("POST", url, true);

    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.setRequestHeader("HTTP_X_REQUESTED_WITH", "XMLHttpRequest");
    
    req.send(vars);
}