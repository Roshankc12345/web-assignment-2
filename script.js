$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        e.preventDefault(); // Prevent form submission

        const formData = $(this).serialize();

        $.ajax({
            url: "process.php",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response === "success") {
                    $("#successMessage").fadeIn();
                    $("#registrationForm")[0].reset();
                } else {
                    alert("An error occurred: " + response);
                }
            },
            error: function () {
                alert("Something went wrong. Please try again.");
            },
        });
    });
});

