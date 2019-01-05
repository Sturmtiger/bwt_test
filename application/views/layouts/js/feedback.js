function feedback_valid(form) {
    var elems = form.elements;

    var name = elems.name.value.trim();
    var email = elems.email.value.trim();
    var message = elems.message.value.trim();


    if (name && email && message) {
        if (name.length < 2) {
            alert('The name is less than 2 symbols');
            return false;
        }
        else if (message.length < 2) {
            alert('The message is less than 2 symbols');
            return false;
        }
    } else {
        alert('Fill all the fields')
        return false;
    }
}