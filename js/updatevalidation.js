$(document).ready(function() {
    $("#updateForm").validate({
      rules: {
        firstname: {
          required: true,
          minlength: 3,
        },
        lastname: {
          required: true,
          minlength: 1,
        },
        email: {
          required: true,
          email: true
        },
        regnumber: {
          required: true,
          minlength: 10,
          strongphonenumber: true
        },
        age: {
            required: true,
            min: 19,
            max: 99
        },
        username:{
            required: true,
            minlength: 3,
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
        email: {
          required: "Email is required",
          email: "Invalid email format"
        },
        password: {
          required: "Password is required",
          minlength: "The password must contain 10 digits",
          strongphonenumber: "The phone number should be valid"
        },
        age: {
            required: "Age is required",
            min: "Age should be between 19 and 99",
            max: "Age should be between 19 and 99"
        },
        username:{
            required: "Username is required",
            minlength: "Username should have minimum 3 characters"
        }
      },
      errorPlacement: function(error, element) {
        error.appendTo("#" + element.attr("id") + "Error");
      }
    });
  
    $.validator.addMethod(
      "strongphonenumber",
      function(value, element) {
        return (
          this.optional(element) ||
          /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(value)
        );
      },
      "The phone number should be valid"
    );
  });
