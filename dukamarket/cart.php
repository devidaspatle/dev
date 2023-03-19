<?php include 'header.php';?>
<?php include 'menu.php';?>

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
                            <h4 class="breadcrumb-title">Your Cart</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                   <nav class="breadcrumb-trail breadcrumbs">
                                      <ul class="breadcrumb-menu">
                                         <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                         </li>
                                         <li class="trail-item">
                                            <span>Cart</span>
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
        <section class="cart-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                        <form action="#">
                           <div class="table-content table-responsive">
                              <table class="table">
                                    <thead>
                                       <tr>
                                          <th class="product-thumbnail">Images</th>
                                          <th class="cart-product-name">Product</th>
                                          <th class="product-price">Unit Price</th>
                                          <th class="product-quantity">Quantity</th>
                                          <th class="product-subtotal">Total</th>
                                          <th class="product-remove">Remove</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="product-thumbnail"><a href="shop-details.html"><img src="assets/img/cart/shop-p-10.jpg" alt=""></a></td>
                                          <td class="product-name"><a href="shop-details.html">Jacket light</a></td>
                                          <td class="product-price"><span class="amount">$130.00</span></td>
                                          <td class="product-quantity">
                                                <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                          </td>
                                          <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                          <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                       </tr>
                                       <tr>
                                          <td class="product-thumbnail"><a href="shop-details.html"><img src="assets/img/cart/shop-p-11.jpg" alt=""></a></td>
                                          <td class="product-name"><a href="shop-details.html">Jacket Pink</a></td>
                                          <td class="product-price"><span class="amount">$120.50</span></td>
                                          <td class="product-quantity">
                                                <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                          </td>
                                          <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                          <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                       </tr>
                                    </tbody>
                              </table>
                           </div>
                           
                           <div class="row justify-content-end">
                              <div class="col-md-5">
                                    <div class="cart-page-total">
                                       <h2>Cart totals</h2>
                                       <ul class="mb-20">
                                          <li>Subtotal <span>$250.00</span></li>
                                          <li>Total <span>$250.00</span></li>
                                       </ul>
                                       <a class="tp-btn-h1" href="checkout.html">Proceed to checkout</a>
                                    </div>
                              </div>
                           </div>
                        </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- cart-area-end -->

        

    </main>

    <!-- footer-start -->
    <?php include 'footer.php';?>