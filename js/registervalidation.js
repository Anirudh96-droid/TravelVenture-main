$(document).ready(function() {
    $("#registrationForm").validate({
      rules: {
        firstname: {
          required: true,
          minlength: 3,
        },
        lastname: {
          required: true,
          minlength: 1,
        },
        age: {
          required: true,
          min: 19,
          max: 99
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 8,
          strongPassword: true
        }
      },
      messages: {
        firstName: {
          required: "First name is required",
          minlength: "First name should have at least 3 characters",
        },
        lastName: {
          required: "Last name is required",
          minlength: "Last name should have at least 3 characters"
        },
        age: {
          required: "Age is required",
          min: "Age should be between 19 and 99",
          max: "Age should be between 19 and 99"
        },
        email: {
          required: "Email is required",
          email: "Invalid email format"
        },
        password: {
          required: "Password is required",
          minlength: "The password must be at least 8 characters long",
          strongPassword: "The password must contain at least one digit, one lowercase letter, one uppercase letter, and be at least 8 characters long"
        }
      },
      errorPlacement: function(error, element) {
        error.appendTo("#" + element.attr("id") + "Error");
      }
    });
  
    $.validator.addMethod(
      "strongPassword",
      function(value, element) {
        return (
          this.optional(element) ||
          /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(value)
        );
      },
      "The password must contain at least one digit, one lowercase letter, one uppercase letter, and be at least 8 characters long"
    );
  });


  //javascript validation

  function validateForm() {
    var regnumber = document.forms["registrationForm"]["regnumber"].value;
    var gender = document.forms["registrationForm"]["gender"].value;
    var username = document.forms["registrationForm"]["username"].value;
    var cpassword = document.forms["registrationForm"]["cpassword"].value;
    var password = document.forms["registrationForm"]["password"].value;

  
    document.getElementById("regnumberError").textContent = "";
    document.getElementById("genderError").textContent = "";
    document.getElementById("usernameError").textContent = "";
    document.getElementById("cpasswordError").textContent = "";
  
    // Phone Number Validation
    if (regnumber === "") {
      document.getElementById("regnumberError").textContent = "Phone Number is required";
      return false;
    } else if (!/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(regnumber)) {
      document.getElementById("regnumberError").textContent = "Phone Number should be valid";
      return false;
    }
  
    // Gender Validation
    if (gender === "") {
      document.getElementById("genderError").textContent = "Gender is required";
      return false;
    }
  
    // Username Validation
    if (username === "") {
      document.getElementById("usernameError").textContent = "Username is required";
      return false;
    } else if (username.length < 3) {
        document.getElementById("firstNameError").textContent = "Username should have at least 3 characters";
        return false;
    }

    // Confirm Password Validation
    if (cpassword === "") {
      document.getElementById("cpasswordError").textContent = "Password is required";
      return false;
    } else if (!/\d/.test(password)) {
      document.getElementById("cpasswordError").textContent = "The password must contain at least one digit";
      return false;
    } else if (!/[a-z]/.test(password)) {
      document.getElementById("cpasswordError").textContent = "The password must contain at least one lowercase letter";
      return false;
    } else if (!/[A-Z]/.test(password)) {
      document.getElementById("cpasswordError").textContent = "The password must contain at least one uppercase letter";
      return false;
    } else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(password)) {
      document.getElementById("cpasswordError").textContent = "The password must consist of a combination of letters (both lowercase and uppercase) and digits, and be at least 8 characters long";
      return false;
    }

    //check password and confirm password
    if(password != cpassword){
        document.getElementById("cpasswordError").textContent = "Passwords does not match";
    }
  
    return true;
  }