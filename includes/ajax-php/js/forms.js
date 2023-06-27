$(function () {
    // After update Profile
    function after_update_profile(data) {
        if (data.result == 'success') {
            // Show a Login successfuly Notification
            round_sucess_notification('Update Success.');

            // Reverse the response on the button
            $('#updateProfileBtn', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });
        } else {
            // Show a Login successfuly Notification
            round_error_notification('Failed to Update Profile.');

            //reverse the response on the button
            $('#updateProfileBtn', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });
        }
    }

    // After Login
    function after_login(data) {
        if (data.result == 'success') {
            // Show a Login successfuly Notification
            round_sucess_notification('Login Success.');

            //reverse the response on the button
            $('#loginBtn', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });

            // Redirect to Home page
            window.location.href = "./";
        }
        else {
            // Show a Login fail Notification
            round_error_notification('Wrong Email or Password.');

            //reverse the response on the button
            $('#loginBtn', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });
        }
    }

    // Login Form Listener
    $('#login_form').submit(function (e) {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('#loginBtn', $form).each(function () {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Authenticating ...');
        });


        $.ajax({
            type: "POST",
            url: 'includes/ajax-php/login.php',
            data: $form.serialize(),
            success: after_login,
            dataType: 'json'
        });
    });


    // Update profile Form Listener
    $('#user_profile_form').submit(function (e) {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('#updateProfileBtn', $form).each(function () {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Authenticating ...');
        });


        // $.ajax({
        //     type: "POST",
        //     url: 'includes/ajax-php/updateProfile.php',
        //     data: $form.serialize(),
        //     success: after_update_profile,
        //     // dataType: 'json'
        // });
    });
});