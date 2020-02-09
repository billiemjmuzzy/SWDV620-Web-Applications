function login() {
    // let text;
    let username = prompt("Username", "");
    let password = prompt("Password", "");

    if (username && password != "") {
        document.getElementById("message").innerHTML = "Hello, " + username + "!";
    } else {
        document.getElementById("error").innerHTML = "Please enter your username and password!";
    }

}

function getTime() {
    document.getElementById("time").innerHTML = Date();
}