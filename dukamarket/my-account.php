     
    <?php include 'header.php';?>
    <?php include 'menu.php';?>
     <!-- header-end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="index.html">
                <img src="assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
        </div>
    </div>
    <!-- offcanvas area end -->      
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">My account</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>My account</span>
                                         </li>
                                      </ul>
                                   </nav> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- account-area-start -->
        <div class="account-area mt-70 mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="basic-login mb-50">
                            <h5>Login</h5>
                            <form action="#">
                                <label for="name">Username or email address  <span>*</span></label>
                                <input id="name" type="text" placeholder="Enter Username">
                                <label for="pass">Password <span>*</span></label>
                                <input id="pass" type="password" placeholder="Enter password...">
                                <div class="login-action mb-10 fix">
                                    <span class="log-rem f-left">
                                       <input id="remember" type="checkbox">
                                       <label for="remember">Remember me</label>
                                    </span>
                                    <span class="forgot-login f-right">
                                       <a href="#">Lost your password?</a>
                                    </span>
                                </div>
                                <a href="login.html" class="tp-in-btn w-100">log in</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="basic-login">
                            <h5>Register</h5>
                            <form action="#">
                                <label for="username">Username or email address  <span>*</span></label>
                                <input id="username" type="text" placeholder="Enter Username">
                                <label for="email-id">Email Address <span>*</span></label>
                                <input id="email-id" type="text" placeholder="Email address...">
                                <label for="userpass">Password <span>*</span></label>
                                <input id="userpass" type="password" placeholder="Enter password...">
                                <div class="login-action mb-10 fix">
                                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                                </div>
                                <a href="login.html" class="tp-in-btn w-100">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account-area-end -->

       
    </main>

    <!-- footer-start -->
    <?php include 'footer.php';?>