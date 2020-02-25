function formValidation() {
    var x = document.forms["multiplyForm"]["num1"].value;
    var y = document.forms["multiplyForm"]["num2"].value;
    if (x == "" ||
        y == "" || isNaN(x) || isNaN(y)) {
        alert("Please enter a valid number");
        return false;
    }
}