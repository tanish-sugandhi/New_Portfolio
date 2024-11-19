$(document).ready(function() {
    // Form validation rules
    $("#forms").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            subject: "required",
            message: "required"
        },
        messages: {
            name: "Please enter your name",
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            subject: "Please enter a subject",
            message: "Please enter your message"
        },
        submitHandler: function(form) {
            form.submit(); // You can customize this to send the form data via AJAX or whatever you prefer
        }
    });
});