
<?= head('Add Member'); ?>

<!-- Start of wrapper -->
<div class="wrapper">
    <div class="col-lg-12">
        <main class="page-content">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class="mb-0 text-uppercase">Add User</h6>
                            <hr />

                            <form id="add-user-form" method="POST" class="row g-3">
                                <div class="col-lg-6" autocomplete="off">
                                    <label class="form-label" for="first-name">Full Name</label>
                                    <input id="userFullNameInput" class="form-control" type="text" name="user-full-name" autocomplete="off" placeholder="Full Name" required>
                                </div>

                                <div class="col-lg-6" autocomplete="off">
                                    <label class="form-label" for="first-name">Email Address</label>
                                    <input id="userEmailInput" class="form-control" type="text" name="user-email" autocomplete="off" placeholder="Email Address" required>
                                </div>


                                <div class="col-lg-6">
                                    <label class="form-label" for="last-name">Phone Number</label>
                                    <div class="input-group" autocomplete="off">
                                        <span class="input-group-text">255</span>
                                        <input id="userPhoneNumberInput" class="form-control" type="number" name="user-phone-number" autocomplete="off" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-grid mx-auto col-3">
                                        <button id="addUserBtn" class="btn btn-primary" type="submit">Add User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>