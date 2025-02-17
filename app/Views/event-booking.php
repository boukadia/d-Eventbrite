<?php include __DIR__ . "/parties/_header.php";
if (!$userData['userid']) {
  header('Location: /login');
}
?>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!--********************************
       Code Start From Here 
  ******************************** -->
  <!--==============================
  Preloader
  ==============================-->
  <div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
      <img src="assets/img/logo.svg" alt="logo">
      <span class="loader"></span>
    </div>
  </div>
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="text-center vs-menu-area">
      <div class="mobile-logo">
        <a href="index.html"><img src="assets/img/logo-white2.svg" alt="Carmax" class="logo"></a>
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      </div>
      <div class="vs-mobile-menu">
        <ul>
          <li class="menu-item-has-children">
            <a href="index.html">Home</a>
            <ul class="sub-menu">
              <li><a href="index.html">Home 1</a></li>
              <li><a href="index-2.html">Home 2</a></li>
              <li><a href="index-3.html">Home 3</a></li>
            </ul>
          </li>
          <li>
            <a href="about.html">About Us</a>
          </li>
          <li class="menu-item-has-children">
            <a href="shop.html">Shop</a>
            <ul class="sub-menu">
              <li><a href="shop.html">Shop Grid</a></li>
              <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
              <li><a href="shop-details.html">Shop Details</a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="account.html">My Account</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="#none">Pages</a>
            <ul class="sub-menu">
              <li><a href="index.html">Home 1</a></li>
              <li><a href="index-2.html">Home 2</a></li>
              <li><a href="index-3.html">Home 3</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="price.html">Pricing Plans</a></li>
              <li><a href="appointment.html">Appointment</a></li>
              <li><a href="blog.html">Blog Grid</a></li>
              <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
              <li><a href="blog-sidebar-2.html">Blog Sidebar 2</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
              <li><a href="services.html">Service</a></li>
              <li><a href="service-details.html">Service Details</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="faq-2.html">FAQs 2</a></li>
              <li><a href="shop.html">Shop Grid</a></li>
              <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
              <li><a href="shop-details.html">Shop Details</a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="team-details.html">Team Details</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="project.html">Projects</a></li>
              <li><a href="project-details.html">Projects Details</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="account.html">My Account</a></li>
              <li><a href="404.html">Error Page</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="shop.html">Elements</a>
            <ul class="sub-menu">
              <li><a href="element-typography.html">Typography</a></li>
              <li><a href="element-buttons.html">Buttons</a></li>
              <li><a href="element-columns.html">Columns</a></li>
              <li><a href="element-messagebox.html">Message Box</a></li>
              <li><a href="element-separators.html">Separators</a></li>
              <li><a href="element-services.html">Services Card</a></li>
              <li><a href="element-testimonials.html">Testimonials</a></li>
              <li><a href="element-projectbox.html">Project Box</a></li>
              <li><a href="element-priceplan.html">Price Plan</a></li>
              <li><a href="element-counters.html">Counters</a></li>
              <li><a href="element-accordions.html">Accordions</a></li>
              <li><a href="element-team.html">Team</a></li>
              <li><a href="element-process.html">Process</a></li>
              <li><a href="element-blogcard.html">Blog Card</a></li>
              <li><a href="element-ctas.html">Call To Actions</a></li>
              <li><a href="element-map.html">Google Map</a></li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--==============================
      Offcanvas
  ============================== -->
  <div class="d-lg-block sidemenu-wrapper d-none">
    <div class="sidemenu-content">
      <button class="closeButton sideMenuCls">
        <i class="far fa-times"></i>
      </button>
      <div class="widget">
        <div class="vs-widget-about">
          <div class="footer-logo">
            <a href="index.html"><img src="assets/img/logo.svg" alt="Eventino"></a>
          </div>
          <p>
            Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend,
            elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui
            end cursus eleifendrpis.
          </p>
          <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="widget">
        <h3 class="widget_title h4">Recent Articles</h3>
        <div class="recent-post-wrap">
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Global Business Goal Make Life Easy From Tech
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fas fa-calendar-alt"></i>09 Aug, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Celebrating in Style High-Tech Solutions for Modern
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fas fa-calendar-alt"></i>05 Mar, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Events The Intersection of Technology and Fun
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fas fa-calendar-alt"></i>20 Jan, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-4.jpg" alt="Blog Image"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Smart Parties How Tech is Revolutionizing Celebrations
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fas fa-calendar-alt"></i>20 Jan, 2022</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include __DIR__ . "/parties/_navbar.php" ?>
  <!--==============================
    Breadcumb
    ============================== -->
  <div class="breadcumb-wrapper" data-bg-src="assets/img/shapes/pexels-mikhail-nilov-7820359.jpg">
    <div class="overlay"></div>
    <img src="assets/img/shapes/pexels-mikhail-nilov-7820326.jpg" alt="shape" class="shape">
    <div class="z-index-common container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Events Booking</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Pages</li>
            <li>Events Booking</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Registration -->
  <!-- <section class="ebooking-wrap1 smoke-bg">

  </section> -->
  <!-- Event Registration End -->
  <!-- Event Details -->
  <div class="space-top space-extra-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h3 class="sec-title">Order Summary</h3>
          <div class="order-summmary ebooking-wrap2">
            <table>
              <tr>
                <th>Event Title</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
              <tr>
                <td>Service And Getaway Fee</td>
                <td>$199.00</td>
                <td>05</td>
                <td>$995.00</td>
              </tr>
              <tr>
                <td>Dhaka University Festival...</td>
                <td>$199.00</td>
                <td>05</td>
                <td>$995.00</td>
              </tr>
              <tr>
                <td>Order Total</td>
                <td> - </td>
                <td> - </td>
                <td>$1,990.00</td>
              </tr>
            </table>
          </div>
          <h3 class="mb-30 sec-title">Registration Information</h3>
          <form class="form-style4 mb-50 ajax-contact">
            <h4 class="mb-25 sec-title h5">Ticket Buyer</h4>
            <div class="mb-20 row gx-20">
            <!-- <input class="form-control" type="hidden" value="<?=  $id ?>" name="event_id" id="finame">
            <input class="form-control" type="hidden" value="<?=  $userData['userid'] ?>" name="userid" id="finame"> -->
              <div class="form-group col-md-6">
                <input class="form-control" type="text" value="<?=  $userData['username'] ?>" name="name" id="finame"
                  placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <input class="form-control" type="text" value="<?=  $userData['username'] ?>" name="name" id="laname"
                  placeholder="Last Name">
              </div>
              <div class="form-group col-md-6">
                <input class="form-control" type="email" value="<?=  $userData['email'] ?>" name="email" id="email"
                  placeholder="Email Address">
              </div>
              <div class="form-group col-md-6">
                <input class="form-control" type="email" value="<?=  $userData['email'] ?>" name="email" id="email"
                  placeholder="Confirm Email Address">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="d-flex pt-10">
                <a href="/payment?event_id=<?= $id ?>" class="w-100 vs-btn" tabindex="0">
                  Pay Now
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Details End -->
  <!-- Newsletter Area -->
  <div class="newsletter-layout1">
    <div class="overlay"></div>
    <div class="container">
      <form action="mail.php" class="newsletter-form1">
        <img src="assets/img/shapes/ns-1-1.png" alt="shape" class="top-0 position-absolute shape start-0">
        <img src="assets/img/shapes/ns-1-2.png" alt="shape" class="bottom-0 position-absolute shape end-0">
        <div class="align-items-center justify-content-between row g-4">
          <div class="col-xl-4 col-lg-6">
            <h2 class="mb-0 text-white sec-title">Get A New Experience With</h2>
          </div>
          <div class="col-auto">
            <div class="row gx-3">
              <div class="form-group mb-0 col-auto">
                <input type="email" class="form-control" placeholder="Enter Your Email">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="col-auto">
                <div class="newsletter-button">
                  <button class="vs-btn style4">Subscribe Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Newsletter Area End -->
  <?php include __DIR__ . "/parties/_footer.php" ?>

  </html>