<header id="header-index" class="fixed-top ">
    <nav id="nav" class="container-fluid  border-bottom mb-6 mb-lg-0 shadow-sm">
        <div class="row">


            <ul class="nav flex-column flex-lg-row menu mr-lg-5 mt-lg-2 mb-lg-2 ">
                <li class="nav-item active d-lg-block ">
                    <a class="nav-link cursor-pointer" href="<?php site_url() ?>"><i class="fas fa-home d-lg-none"></i> خانه
                        <span class="sr-only ">(current)</span>
                    </a>
                </li>
                <li class="nav-item  d-lg-block ">
                    <a class="nav-link cursor-pointer" href="<?= site_url() ?>portfolio"><i class="fab fa-creative-commons-sampling d-lg-none"></i>
                        نمونه کارهای من </a>
                </li>
                <li class="nav-item  d-lg-block ">
                    <a class="nav-link cursor-pointer" href="<?= site_url() ?>archive"><i class="far fa-edit d-lg-none"></i> نوشته های
                        من </a>
                </li>
                <li class="nav-item  d-lg-block ">
                    <a class="nav-link cursor-pointer" href="https://t.me/mehrzad_tajkarimi"><i class="fas fa-mobile-alt d-lg-none"></i> تماس با من </a>
                </li>
                <li class="nav-item  d-lg-block">
                    <a class="nav-link cursor-pointer" href="https://jobinja.ir/user/webzad"><i class="fas fa-file-download d-lg-none"></i> دانلود رزومه من </a>
                </li>
                <li class="nav-item  d-lg-none d-block">
                    <a class="nav-link cursor-pointer" href="user"><i class="fas fa-user "></i>ثبت نام و ورود </a>
                </li>

            </ul>

            <button id="burger" class="d-lg-none bg-transparent border-0 p-3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>

            <a id="user-login" href="user" class="mt-3 d-lg-block d-none mr-5" title="ثبت نام/ورود">
                <h5><i class="fas fa-user "></i></h5>
            </a>

            <a id="image-logo" href="index.php" class="position-absolute d-block cursor-pointer" style="left: 4em; top: .2em;">
                <img class=" " src="<?= asset_url() ?>/image/logo.svg" alt="webzad">
            </a>
        </div>
    </nav>
</header>