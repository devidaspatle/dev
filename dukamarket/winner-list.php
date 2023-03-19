      
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
                <a href="index.php">
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
                            <h4 class="breadcrumb-title">Winner List</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Winner List</span>
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

        <!-- cart-area-start -->
        <section class="cart-area pb-60 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="cart-product-name">Winner's Name</th>
                                            <th class="cart-product-name">Coupon No</th>
                                            <th class="cart-product-name">Location</th>
                                            <th class="cart-product-name">Winning Item</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="product-name">Manish Bisen</td>
                                            <td class="product-name">EM10111</td>
                                            <td class="product-name">Nagpur</td>
                                            <td class="product-name">Digital Smart Watch</td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td class="product-name">Manish Bisen</td>
                                            <td class="product-name">EM10111</td>
                                            <td class="product-name">Nagpur</td>
                                            <td class="product-name">Digital Smart Watch</td>
                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
         <!-- cart-area-end -->

        <!-- cta-area-start -->
        

        </section>
        <!-- cta-area-end -->

    </main>

    <!-- footer-start -->
    <?php include 'footer.php';?>