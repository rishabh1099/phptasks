var arr = document.querySelectorAll('input[type="text"]');
for (i = 0; i < arr.length; i++) {
    arr[i].setAttribute("required", "");
}
document.querySelector('input[type="password"]').setAttribute("required", "");

function validate() {
    var span = document.getElementsByTagName('span');
    for (a = 0; a < span.length; a++) {
        span[a].style.display = "none";
    }
    var user = document.getElementById('user').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;
    var name_check = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    var mail_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (user.length < 3 || user.length > 20) {
        document.getElementById('us').style.display = "block";
        document.getElementById('us').textContent = "**Invalid name";
        return false;
    } else if (name_check.test(user) == true) {
        document.getElementById('us').style.display = "block";
        document.getElementById('us').textContent = "**Invalid name";
        return false;
    } else if (!mail_check.test(email)) {
        document.getElementById('em').style.display = "block";
        document.getElementById('em').textContent = "**Invalid email";
        return false;
    } else if (address.length < 3) {
        document.getElementById('ad').style.display = "block";
        document.getElementById('ad').textContent = "**Invalid address";
        return false;
    } else if (city.length < 3) {
        document.getElementById('ci').style.display = "block";
        document.getElementById('ci').textContent = "**Invalid City";
        return false;
    } else {
        return true;
    }
}





// name_check.test(name)
// !mail_check.test(email)