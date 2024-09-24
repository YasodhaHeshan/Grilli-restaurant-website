function validateForm() {
    var name = document.forms["reservation-form"]["name"].value;
    var phone = document.forms["reservation-form"]["phone"].value;
    var person = document.forms["reservation-form"]["person"].value;
    var reservationDate = document.forms["reservation-form"]["reservation-date"].value;
    var time = document.forms["reservation-form"]["time"].value;

    // Regular expression for matching only letters
    var lettersPattern = /^[A-Za-z]+$/;

    // Regular expression for Sri Lankan phone numbers (10 digits starting with '0')
    var phonePattern = /^0\d{9}$/;

    if (name == "") {
        alert("Please enter your name");
        return false;
    } else if (!lettersPattern.test(name)) {
        alert("Name can only contain letters");
        return false;
    }

    if (phone == "") {
        alert("Please enter your phone number");
        return false;
    } else if (!phonePattern.test(phone)) {
        alert("Please enter a valid Sri Lankan phone number");
        return false;
    }

    if (person == "") {
        alert("Please select the number of people");
        return false;
    }

    if (reservationDate == "") {
        alert("Please select a reservation date");
        return false;
    }

    if (time == "") {
        alert("Please select a reservation time");
        return false;
    }
}
