function login() {
    const username = prompt("Username", "");
    const password = prompt("Password", "");

    if (username && password != "") {
        document.getElementById("message").innerHTML = "Hello, " + username + "!";
    } else {
        document.getElementById("error").innerHTML = "Please enter your username and password!";
    }

}

function getDateTime() {
    document.getElementById("dateTime").innerHTML = Date();
}

function windowHostObj() {
    const w = window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

    const h = window.innerHeight ||
        document.documentElement.clientHeight ||
        document.body.clientHeight;

    const x = document.getElementById("demoHostObj");
    x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
}