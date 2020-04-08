<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="/css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <!-- nice select CSS -->
  <link rel="stylesheet" href="/css/nice-select.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="/css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="/css/flaticon.css">
  <link rel="stylesheet" href="/css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="/css/slick.css">
  <link rel="stylesheet" href="/css/price_rangs.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <!--::header part start::-->
  
  <header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                    <a class="dropdown-item" href="category.html"> shop category</a>
                                    <a class="dropdown-item" href="single-product.html">product details</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="login.html"> login</a>
                                    <a class="dropdown-item" href="tracking.html">tracking</a>
                                    <a class="dropdown-item" href="checkout.html">product checkout</a>
                                    <a class="dropdown-item" href="cart.html">shopping cart</a>
                                    <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                    <a class="dropdown-item" href="blog.html"> blog</a>
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="single_product">

                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
   <!--  <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> -->
</header>
  <!-- Header part end-->

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span>Sold Product</p>
            </div>
          </div>
        </div>
      </div>
</div>
</section>
  
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
      <div class="billing_details">
        <div class="row">
          <div class="container">
            <div class="order_box">
            <table class="table table-borderless">
            <h2>Order products</h2>
              <thead>
                <tr>
                 
                  <th scope="col">Stock id</th>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Order id</th>  
                  <th scope="col">Amount</th>
                  <th scope="col">Order date</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Total Profits</th>
                </tr>
              </thead>
              
              
              @yield('content')
               
              </table>     
                    <!-- <span>Profits</span> -->
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->
<!-- product_list part start-->
<section class="product_list best_seller">
<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
            <div class="best_product_slider owl-carousel">
            @yield('content')
            </div>
        </div>
    </div>
</div>
</section>
    <!-- product_list part end-->
  <footer class="footer_part">
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="/js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="/js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="/js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="/js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="/js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="/js/slick.min.js"></script>
  <script src="/js/jquery.counterup.min.js"></script>
  <script src="/js/waypoints.min.js"></script>
  <script src="/js/contact.js"></script>
  <script src="/js/jquery.ajaxchimp.min.js"></script>
  <script src="/js/jquery.form.js"></script>
  <script src="/js/jquery.validate.min.js"></script>
  <script src="/js/mail-script.js"></script>
  <script src="/js/stellar.js"></script>
  <script src="/js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>