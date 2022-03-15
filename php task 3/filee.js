function myfun() {
    var span = document.getElementsByTagName('span');
    for (a = 0; a < span.length; a++) {
        span[a].style.display = "none";
    }
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass').value;
    var mail_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (!mail_check.test(email)) {
        document.getElementById('em').style.display = "block";
        document.getElementById('em').textContent = "**Invalid email";

        return false;
    } else {
        return true;
    }

}