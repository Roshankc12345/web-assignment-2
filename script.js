$(document).ready(function () {
    // Handle form submission
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault();

        // Serialize form data
        const formData = $(this).serialize();

        // Send data to the server
        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: formData,
            success: function (response) {
                if (response === 'success') {
                    $('#successMessage').fadeIn().delay(2000).fadeOut();
                    $('#registrationForm')[0].reset(); // Clear the form
                } else {
                    alert('Registration failed. Please try again.');
                }
            },
            error: function () {
                alert('Error in connecting to the server.');
            }
        });
    });

    // Handle view registered users
    $('#viewUsersBtn').on('click', function () {
        $.ajax({
            url: 'get_users.php',
            method: 'GET',
            success: function (data) {
                const users = JSON.parse(data);
                const userList = $('#userList');
                userList.empty();
                users.forEach(user => {
                    userList.append(`<li>${user}</li>`);
                });
                $('#registeredUsers').fadeIn();
            },
            error: function () {
                alert('Error fetching users.');
            }
        });
    });
});
