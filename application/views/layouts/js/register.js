function reg_valid(form) {
    var elems = form.elements;

    var name = elems.name.value.trim();
    var surname = elems.surname.value.trim();
    var email = elems.email.value.trim();
    var password = elems.password.value.trim();
    var cpassword = elems.cpassword.value.trim();

    if (name && surname && email && password && cpassword) {
        if (name.length < 2) {
            alert('Name is less than 2 symbols!');
            return false;
        }
        else if (name.length > 30) {
            alert('Name is more than 30 symbols!');
            return false;
        }
        else if (surname.length < 2) {
            alert('Surname is less than 2 symbols!');
            return false;
        }
        else if (surname.length > 30) {
            alert('Surname is more than 2 symbols!');
            return false;
        }
        else if (password.length < 10) {
            alert('Password is less than 10 symbols!')
            return false;
        }
        else if (password != cpassword) {
            alert('Passwords do not match!');
            return false;
        }

    } else {
        alert('Fill all the fields!')
        return false;
    }
}