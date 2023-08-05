 //javascript validation

 function validateBookForm() {
    var fullName = document.forms["book"]["fullName"].value;
    var email = document.forms["book"]["email"].value;
    var phoneNumber = document.forms["book"]["phoneNumber"].value;
    var address = document.forms["book"]["address"].value;
    //var destination = document.forms["book"]["destination"].value;
    var guests = document.forms["book"]["guests"].value;
    var startDate = document.forms["book"]["startDate"].value;
    var endDate = document.forms["book"]["endDate"].value;


  
    document.getElementById("fullNameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("phoneNumberError").textContent = "";
    document.getElementById("addressError").textContent = "";
    //document.getElementById("destinationError").textContent = "";
    document.getElementById("guestsError").textContent = "";
    document.getElementById("startDateError").textContent = "";
    document.getElementById("endDateError").textContent = "";
  
    // Full Name Validation
    if (fullName === "") {
      document.getElementById("fullNameError").textContent = "Full Name is required";
      return false;
    } else if (fullNameError.length < 3) {
      document.getElementById("fullNameError").textContent = "First name should have at least 3 characters";
      return false;
    }

    // Email Validation
    if (email === "") {
        document.getElementById("emailError").textContent = "Email is required";
        return false;
        } else if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
        document.getElementById("emailError").textContent = "Invalid email format"
    }

    // Phone Number Validation
    if (phoneNumber === "") {
        document.getElementById("phoneNumberError").textContent = "Phone Number is required";
        return false;
        } else if (!/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(phoneNumber)) {
        document.getElementById("phoneNumberError").textContent = "Phone Number should be valid";
        return false;
    }

    // Address Validation
    if (address === "") {
        document.getElementById("addressError").textContent = "Address is required";
        return false;
    }
  
    // Destination Validation
    /*if (destination === "") {
      document.getElementById("destinationError").textContent = "Destination is required";
      return false;
    }*/

    // Guest Validation
    if (guests === "") {
      document.getElementById("guestsError").textContent = "Guest is required";
      return false;
    }

    // Start date Validation
    if (startDate === "") {
        document.getElementById("startDateError").textContent = "Start date is required";
        return false;
    }

    // End date Validation
    if (endDate === "") {
        document.getElementById("endDateError").textContent = "End date is required";
        return false;
    }

    return true;
  }