var register = document.getElementById("registerPart");
 var login = document.getElementById("loginPart");
register.style.display = "none";
function toggleRegister() {
    
   
    if (register.style.display === "none") {
        register.style.display = "block";
    } else {
        register.style.display = "none";
    }
    
    if (login.style.display === "none") {
        login.style.display = "block";
    } else {
        login.style.display = "none";
    }
    
     
}