<?php
// Header File
require 'utils.php';

echo head('Payment');
?>


<!--start wrapper-->
<div class="wrapper">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="mb-0">Payments</h5>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- </main> -->
    <!--end page main-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->


    <!-- Show or hide password input -->
    <script type="text/javascript">
        function showPassword() {
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide-pass-icon");
        

            if (x.type === "password" && y.className == "lni lni-eye") {
                x.type = "text";
                y.className = "bx bx-hide";
            } else {
                x.type = "password";
                y.className = "lni lni-eye";
            }
        }
    </script>
    
    <script type="text/javascript">
        function changeText() {
            var x = document.getElementById("save-changes-btn");
            if (x.innerText == "Save Changes") {
                x.innerText = "Saving..";
            } else {
                x.innerText = "Save Changes";
            }
        }
    </script>

</div>
<!--end wrapper-->


<?php echo footer(); ?>