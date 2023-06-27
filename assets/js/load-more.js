$(document).ready(function () {

    // Load more data
    $('.load-more').click(function () {
        var row = Number($('#row').val());
        var allcount = Number($('#all').val());
        console.log(allcount);
        var rowperpage = 12;
        row = row + rowperpage;

        if (allcount > rowperpage) {
            if (row <= allcount) {
                $("#row").val(row);
                $.ajax({
                    url: 'includes/ajax-php/load-more.php',
                    type: 'post',
                    data: { row: row },
                    beforeSend: function () {
                        $(".load-more").text("Loading...");
                    },
                    success: function (response) {

                        // Setting little delay while displaying new content
                        setTimeout(function () {
                            // appending posts after last post with class="post"
                            $(".members-details:last").after(response).show().fadeIn("slow");

                            var rowno = row + rowperpage;

                            // checking row value is greater than allcount or not
                            if (rowno > allcount) {
                                // Change the text and background
                                // $('.load-more').text("Hide");
                                $('.load-more').hide();
                                $('.load-more').css("background", "darkorchid");
                            } else {
                                $(".load-more").text("Load more");
                            }
                        }, 1000);

                    }
                });
            } else {
                $('.load-more').text("Loading...");

                // Setting little delay while removing contents
                setTimeout(function () {

                    // When row is greater than allcount then remove all class='post' element after 3 element
                    $('.members-details:nth-child(12)').nextAll('.members-details').remove();

                    // Reset the value of row
                    $("#row").val(0);

                    // Change the text and background
                    $('.load-more').text("Load more");
                    $('.load-more').css("background", "#15a9ce");

                }, 2000);
            }
        } else {
            $('.load-more').hide();
            $('.load-more').css("background", "darkorchid");
        }
    });
});