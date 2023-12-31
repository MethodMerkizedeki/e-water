<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3">
                <i class="bi bi-list"></i>
            </div>

            <div class="top-navbar-right ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown dropdown-user-setting">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center">
                                <img src="admin.png" class="user-img" alt="">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <div class="d-flex align-items-center">
                                        <img src="admin.png" alt="" class="rounded-circle" width="60" height="54">

                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">Ethan Mark</h6>
                                            <small id="adminRole" class="mb-0 dropdown-user-designation text-secondary"></small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <div class="d-flex align-items-center">
                                        <div class=""><i class="bi bi-person-fill"></i></div>
                                        <div class="ms-3"><span>Profile</span></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <i class="bi bi-lock-fill"></i>
                                        </div>
                                        <div class="ms-3">
                                            <span id="logout">Logout</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="rounded">
                <a href="./">
                    <img src="./ewater.png" class="rounded-circle logo-icon" alt="logo icon">
                </a>
            </div>

            <div>
                <a href="./">
                    <h4 class="logo-text">eWater</h4>
                </a>
                <!-- <h8 class="logo-text">version : 1.4</h8> -->
            </div>


            <div class="toggle-icon ms-auto">
                <i class="bi bi-list"></i>
            </div>
        </div>

        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="./">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">System</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-users"></i>
                    </div>
                    <div class="menu-title">Users</div>
                </a>
                <ul>
                    <li>
                        <a href="users.php?source=add_user">
                            <i class="bi bi-circle"></i>
                            Add User
                        </a>
                    </li>
                    <li> <a href="users.php"><i class="bi bi-circle"></i>View Users</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <div class="parent-icon"><i class="lni lni-money-location"></i>
                    </div>
                    <div class="menu-title">Payments</div>
                </a>
            </li>


            <li>
                <a href="profile.php">
                    <div class="parent-icon"><i class="lni lni-user"></i>
                    </div>
                    <div class="menu-title">Admin Profile</div>
                </a>
            </li>

            <li class="memberUser">
                <a id="testPopup" href="#" target="_blank" onclick="clickLabel()">
                    <div class="parent-icon"><i class="lni lni-headphone-alt"></i>
                    </div>
                    <div class="menu-title">Support</div>
                </a>
            </li>
        </ul>
        <div class="bottom">
            <h4>
                Version: 1.0
            </h4>
        </div>
    </aside>
    <div class="overlay nav-toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

</div>
<!--end wrapper-->


<!-- Support Popup Modal -->
<div class="popup centere">
    <div class="title">
        Support
        <button popup-close-button class="close-button" onclick="closeModal()">&times;</button>
    </div>
    <div class="dismiss-btn">
        <a target="_blank" href="tel:255621433903">
            <button type="submit" id="dismiss-popup-btn" onclick="removePopup()">
                <i class="h4 bi bi-telephone-outbound"></i>
            </button>
        </a>

        <a target="_blank" href="https://wa.me/255621433903">
            <button type="submit" id="dismiss-popup-btn" onclick="removePopup()">
                <i class="h4 bi bi-whatsapp"></i>
            </button>
        </a>
    </div>
</div>
<!-- End of Popup Modal -->