$(function () {
    // After adding user
    function after_add_user(data) {
        if (data.result == 'success') {
            round_sucess_notification('User Added.');

            //reverse the response on the button
            $('#addUserBtn', $form).each(function () {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if (label) {
                    $btn.prop('type', 'submit');
                    $btn.text(label);
                    $btn.prop('orig_label', '');
                }
            });

            // Emptying the input Fields
            setTimeout(function () {
                $('#userFullNameInput').val('');
                $('#userPhoneNumberInput ').val('');
                $('#userEmailInput ').val('');
            }, 2000);

        }
        else {
            // Show a Login fail Notification
            round_error_notification('Failed to add user.');

            //reverse the response on the button
            $('#addUserBtn', $form).each(function () {
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
    // Add user Form Listener
    $('#add-user-form').submit(function (e) {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('#addUserBtn', $form).each(function () {
            $btn = $(this);
            $btn.prop('type', 'button');
            $btn.prop('orig_label', $btn.text());
            $btn.text('Adding ...');
        });


        $.ajax({
            type: "POST",
            url: 'includes/ajax-php/add-user.php',
            data: $form.serialize(),
            success: after_add_user,
            dataType: 'json'
        });

    });
});