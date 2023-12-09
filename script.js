function openSignUp(){
    document.getElementById("create_account_form").style.display = "block";
    document.getElementById("login_form").style.display = "none";
}

function openLogin(){
    document.getElementById("create_account_form").style.display = "none";
    document.getElementById("login_form").style.display = "block";
}

function switchNavButtonColor(button_id){
    var elements = document.getElementsByClassName('nav_buttons');
    for (var i = 0; i < elements.length; i++){
        elements[i].style.backgroundColor = "white";
    }
    document.getElementById(button_id).style.backgroundColor = "#a46dbd";
}