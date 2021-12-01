
function validate(){
    var u = document.getElementById("username").value;
    var p = document.getElementById("password").value;
    if (u.length <= 0){
        alert("Username field is blank: please enter a username");
    }
    else if(p.length <= 0){
        alert("Password field is blank: please enter a password");
    }
    else{
        alert("Sucess!");
    }
}

function rst(){
   window.location.reload();
}