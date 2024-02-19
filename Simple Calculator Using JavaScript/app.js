function add() {
    var num1 = parseFloat(document.getElementById("number1").value);
    var num2 = parseFloat(document.getElementById("number2").value);
    var result = num1 + num2;
    document.getElementById("result").value = result;
}

function subtract() {
    var num1 = parseFloat(document.getElementById("number1").value);
    var num2 = parseFloat(document.getElementById("number2").value);
    var result = num1 - num2;
    document.getElementById("result").value = result;
}

function multiply() {
    var num1 = parseFloat(document.getElementById("number1").value);
    var num2 = parseFloat(document.getElementById("number2").value);
    var result = num1 * num2;
    document.getElementById("result").value = result;
}

function divide() {
    var num1 = parseFloat(document.getElementById("number1").value);
    var num2 = parseFloat(document.getElementById("number2").value);
    if (num2 === 0) {
        alert("Cannot divide by zero");
        return;
    }
    var result = num1 / num2;
    document.getElementById("result").value = result;
}

function reset() {
    document.getElementById("number1").value = "";
    document.getElementById("number2").value = "";
    document.getElementById("result").value = "";
}