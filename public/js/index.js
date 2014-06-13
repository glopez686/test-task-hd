
$(document).ready(function() {
    $(".login").submit(function(e) {
        $("#formerrors").text("");
        var errors = "";
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (testEmail.test($("#email").val())) {
            isValid = true;
        } else {
            errors = "Invalid Email Address\n";
            //$("#formerrors").text("Invalid Email Address");
        }
        if ($('#pswd').val() == "") {
            errors += " Invalid Password";
        }
        if (errors != "") {
            e.preventDefault();
            $("#formerrors").text(errors);
        }
    });
});
$(document).ready(function() {
    $("#button").click(function() {
        $("#popup").show();
    });
    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            window.location = "/login";
        }
    });
});
