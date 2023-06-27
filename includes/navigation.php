<style>
    .mobile-nav {
        z-index: 9999;
        background: #fff;
        box-shadow: 2 1.125rem 1.25rem rgb(123 234 128 / 1%);
        flex: 1 1 auto;
        border-radius: 10px 10px 0px 0px;
        position: fixed;
        bottom: 0;
        height: 65px;
        width: 100%;
        display: flex;
        justify-content: space-around;
    }

    .bloc-icon {
        /* display: flex;   */
        justify-content: center;
        align-items: center;
    }

    .mobile-nav i {
        font-size: xx-large;
        font-weight: bold;
        color: #3361ff !important;
        transition: 0.4s ease-in-out;
    }

    .mobile-nav i:hover {
        /* font-size: 25px; */
        font-weight: bold;
        color: blue !important;
        transition: 0.4s ease-in-out;
    }

    .mobile-nav span {
        color: black;
    }


    @media screen and (min-width: 600px) {
        .mobile-nav {
            display: none;
        }
    }
</style>

<section class="text-center">
    <nav class="mobile-nav">
        <a href="./" class="bloc-icon">
            <i class="bx bx-home-alt"></i>
            <div>
                <span>Home</span>
            </div>
        </a>
        <a href="report.php" class="bloc-icon">
            <i class="bx bx-book-bookmark"></i>
            <div>
                <span>Report</span>
            </div>
        </a>
        <a href="https://wa.me/255784635306" class="bloc-icon">
            <i class="bx bx-phone-outgoing"></i>
            <div>
                <span>Support</span>
            </div>
        </a>
        <a href="profile.php" class="bloc-icon">
            <i class="bx bx-user"></i>
            <div>
                <span>Profile</span>
            </div>
        </a>
    </nav>
</section>