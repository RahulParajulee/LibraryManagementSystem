var loginform = document.getElementById("loginform");
var regform = document.getElementById("regform");
var Indicator = document.getElementById("Indicator");

function register(){
    regform.style.transform = "translateX(0px)";
    loginform.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
 }

function login(){
regform.style.transform = "translateX(300px)";
loginform.style.transform = "translateX(300px)";
Indicator.style.transform = "translateX(0px)";
}