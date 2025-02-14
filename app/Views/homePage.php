<?php include __DIR__. "/parties/_header.php" ?>

  <!--==============================
  Preloader
  ==============================-->
<?php include __DIR__. "/parties/_loader.php" ?>
  
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="text-center vs-menu-area">
      <div class="mobile-logo">
        <a href="index.html"><img src="/assets/img/logo-white2.svg" alt="Carmax" class="logo"></a>
        <button class="vs-menu-toggle"><i class="fa-times fal"></i></button>
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
  <div class="d-lg-block d-none sidemenu-wrapper">
    <div class="sidemenu-content">
      <button class="closeButton sideMenuCls">
        <i class="fa-times far"></i>
      </button>
      <div class="widget">
        <div class="vs-widget-about">
          <div class="footer-logo">
            <a href="index.html"><img src="/assets/img/logo.svg" alt="Eventino"></a>
          </div>
          <p>
            Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend,
            elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui
            end cursus eleifendrpis.
          </p>
          <div class="footer-social">
            <a href="#"><i class="fa-facebook-f fab"></i></a>
            <a href="#"><i class="fa-twitter fab"></i></a>
            <a href="#"><i class="fa-instagram fab"></i></a>
            <a href="#"><i class="fa-behance fab"></i></a>
            <a href="#"><i class="fa-youtube fab"></i></a>
          </div>
        </div>
      </div>
      <div class="widget">
        <h3 class="h4 widget_title">Recent Articles</h3>
        <div class="recent-post-wrap">
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/blog/recent-post-1-1.jpg" ?> alt="BlogImage"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Global Business Goal Make Life Easy From Tech
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fa-calendar-alt fas"></i>09 Aug, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/blog/recent-post-1-2.jpg" ?> alt="BlogImage"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Celebrating in Style High-Tech Solutions for Modern
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fa-calendar-alt fas"></i>05 Mar, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/blog/recent-post-1-3.jpg" ?> alt="BlogImage"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Events The Intersection of Technology and Fun
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fa-calendar-alt fas"></i>20 Jan, 2022</a>
              </div>
            </div>
          </div>
          <div class="recent-post">
            <div class="media-img">
              <a href="blog-details.html"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/blog/recent-post-1-4.jpg" ?> alt="BlogImage"></a>
            </div>
            <div class="media-body">
              <h4 class="post-title">
                <a class="text-inherit" href="blog-details.html">
                  Smart Parties How Tech is Revolutionizing Celebrations
                </a>
              </h4>
              <div class="recent-post-meta">
                <a href="blog.html"><i class="fa-calendar-alt fas"></i>20 Jan, 2022</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
        Header Area
    ==============================-->
  <?php include __DIR__ . "/parties/_navbar.php" ?>
  <!--==============================
    Hero Area
    ==============================-->
  <section>
    <div class="style2 vs-carousel" data-slide-show="1" data-fade="true" data-arrows="false">
      <div>
        <div class="hero-inner style2">
          <div class="overlay"></div>
          <div class="hero-bg" data-bg-src=<?= $_ENV['PATH_LINK'] . "assets/img/bg/h-2-1-1.jpg" ?>></div>
          <img src=<?= $_ENV['PATH_LINK'] . "assets/img/shapes/h-1-1.png" ?> alt="shapes" class="hero-shape1">
          <div class="container">
            <div class="justify-content-between row">
              <div class="mx-auto col-lg-6">
                <div class="text-center hero-content style2">
                  <span class="hero-subtitle">Get Best event Management</span>
                  <h1 class="hero-title">Events, Meetups & Conferences</h1>
                  <p class="hero-text">Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula lentum sed
                    sit
                    amet amet quam vehicula dui amet quam vehicula.</p>
                  <div class="justify-content-center hero-btns">
                    <a href="about.html" class="vs-btn">
                      About Us
                    </a>
                    <a href="about.html" class="style3 vs-btn">
                      Get Started
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="hero-inner style2">
          <div class="overlay"></div>
          <div class="hero-bg" data-bg-src=<?= $_ENV['PATH_LINK'] . "assets/img/bg/h-2-2-2.jpg" ?>></div>
          <img src=<?= $_ENV['PATH_LINK'] . "assets/img/shapes/h-1-1.png" ?> alt="shapes" class="hero-shape1">
          <div class="container">
            <div class="justify-content-between row">
              <div class="mx-auto col-lg-7">
                <div class="text-center hero-content style2">
                  <span class="hero-subtitle">Get Best event Management</span>
                  <h1 class="hero-title">Global Marketing Meetup Strategies for 2025</h1>
                  <p class="hero-text">Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula lentum sed
                    sit
                    amet amet quam vehicula dui amet quam vehicula.</p>
                  <div class="justify-content-center hero-btns">
                    <a href="about.html" class="vs-btn">
                      About Us
                    </a>
                    <a href="about.html" class="style3 vs-btn">
                      Get Started
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="hero-inner style2">
          <div class="overlay"></div>
          <div class="hero-bg" data-bg-src=<?= $_ENV['PATH_LINK'] . "assets/img/bg/h-3-3-3.jpg" ?>></div>
          <img src=<?= $_ENV['PATH_LINK'] . "assets/img/shapes/h-1-1.png" ?> alt="shapes" class="hero-shape1">
          <div class="container">
            <div class="justify-content-between row">
              <div class="mx-auto col-lg-7">
                <div class="text-center hero-content style2">
                  <span class="hero-subtitle">Get Best event Management</span>
                  <h1 class="hero-title">Global Marketing Meetup Strategies for 2025</h1>
                  <p class="hero-text">Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula lentum sed
                    sit
                    amet amet quam vehicula dui amet quam vehicula.</p>
                  <div class="justify-content-center hero-btns">
                    <a href="about.html" class="vs-btn">
                      About Us
                    </a>
                    <a href="about.html" class="style3 vs-btn">
                      Get Started
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div>
    <div class="container">
      <div class="position-relative">
        <div class="brand-wrap2 vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
          id="brand-slider1">

          <div>
            <div class="mx-5 mt-4 brand-style1">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/brand/b-1-1.png" ?> alt="brand">
            </div>
          </div>
          <div>
            <div class="mx-5 mt-4 brand-style1">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/brand/b-1-2.png" ?> alt="brand">
            </div>
          </div>
          <div>
            <div class="mx-5 brand-style1">
              <img style="height : 6rem" src=<?= $_ENV['PATH_LINK'] . "assets/img/brand/b-1-4.png" ?> alt="brand">
            </div>
          </div>
          <div>
            <div class="mx-5 mt-4 brand-style1">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/brand/b-1-5.png" ?> alt="brand">
            </div>
          </div>
          <div>
            <div class="mx-5 mt-4 brand-style1">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/brand/b-1-6.png" ?> alt="brand">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Hero End Area -->
  <!-- About Area Start -->
  <section class="space-top space-extra-bottom about">
    <div class="container">
      <div class="align-items-center gx-40 row">
        <div class="col-lg-6">
          <div class="text-center img-box2">
            <div class="card-style2">
              <span class="number"><span>5</span>+</span>
              <h3 class="title">Days of Experience</h3>
            </div>
            <img src=<?= $_ENV['PATH_LINK'] . "assets/img/about/a-full-1.png" ?> alt="about">
          </div>
        </div>
        <div class="mb-30 col-lg-6">
          <span class="sec-subtitle">About Us</span>
          <h2 class="sec-title">Nous sommes Eventino, agence de gestion d'événements n°1</h2>
          <p>Une plateformes de gestion d’événements comme Eventbrite permettent aux organisateurs de créer, gérer et promouvoir des événements en ligne ou en présentiel.</p>
          <div class="list-style1 style2">
            <ul>
              <li><i class="fa-check-circle fal"></i> Les organisateurs peuvent publier et gérer des événements.</li>
              <li><i class="fa-check-circle fal"></i> Les participants peuvent réserver des billets en ligne.</li>
              <li><i class="fa-check-circle fal"></i> Un back-office permet aux administrateurs de gérer les utilisateurs et événements.</li>
              <li><i class="fa-check-circle fal"></i> Des statistiques avancées permettent un suivi précis des événements et ventes.</li>
            </ul>
          </div>
          <div class="d-inline-flex">
            <!-- <a href="about.html" class="vs-btn" tabindex="0">
              More Information
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Area End -->

  <!-- select by category -->
  <section class="space-top space-extra-bottom events">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-10 col-xl-7 col-xxl-6">
          <div class="text-center title-area">
            <span class="sec-subtitle2">Upcoming Events</span>
            <h2 class="sec-title">Explore Our Next Upcoming Awesome Events</h2>
          </div>
        </div>
        <div>
          <div class="filter-menu-active filter-menu1 fadeInUp wow" data-wow-delay="0.3s">
            <button data-filter="*" class="active">All</button>
            <button data-filter=".Business">Business</button>
            <button data-filter=".Art">Art</button>
            <button data-filter=".Education">Education</button>
            <button data-filter=".Sport">Sport</button>
            <button data-filter=".Festival">Festival</button>
            <button data-filter=".More">More</button>
          </div>
        </div>
      </div>
      <div class="filter-active2 fadeInUp row wow" data-wow-delay="0.4s">
        <div class="filter-item Art Business col-lg-4 col-md-6 More">
          <div class="event-style1">
            <div class="event-img">
              <img src="/assets/img/events/e-1-1.jpg" alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Business</a>
              </div>
              <div class="event-date">
                <span>20</span>
                January
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Ring in the New Year A Reunion and Music!</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-item Art col-lg-4 col-md-6 Education Sport">
          <div class="event-style1">
            <div class="event-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-1-2.jpg"?> alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Art</a>
              </div>
              <div class="event-date">
                <span>24</span>
                January
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">New Year’s Eve Reunion Celebrate with Music and
                  Friends</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$150</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-item Art col-lg-4 col-md-6 Education More">
          <div class="event-style1">
            <div class="event-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-1-3.jpg"?> alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Education</a>
              </div>
              <div class="event-date">
                <span>25</span>
                March
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">2024 Reunion Music, Memories, and New Year’s
                  Celebrations</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-item Business col-lg-4 col-md-6 Education Education">
          <div class="event-style1">
            <div class="event-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-1-4.jpg"?> alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Education</a>
              </div>
              <div class="event-date">
                <span>15</span>
                January
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Unite and Celebrate Happy New Year Music
                  Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$299</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-item Business col-lg-4 col-md-6 More Sport">
          <div class="event-style1">
            <div class="event-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-1-5.jpg"?> alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Sport</a>
              </div>
              <div class="event-date">
                <span>12</span>
                January
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Celebrate Together New Year’s Reunion and Music
                  Bash</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="filter-item col-lg-4 col-md-6 Festival Sport">
          <div class="event-style1">
            <div class="event-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-1-6.jpg"?> alt="e 1 1">
              <div class="event-tags">
                <a href="event-details.html">Festival</a>
              </div>
              <div class="event-date">
                <span>10</span>
                January
              </div>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Dance into the New Year Reunion and Music
                  Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="justify-content-center row">
        <div class="col-auto">
          <div class="d-inline-flex pt-10">
            <a href="event.html" class="vs-btn">View All Events</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- select by category end -->


  <!-- Feature Area -->
  <!-- <section class="feature-layout2">
    <div class="container">
      <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
        data-md-slide-show="2">
        <div class="col-lg-3 col-md-6">
          <div class="feature-style2">
            <div class="feature-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/f-1-1.svg" ?> alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Friendly Team</h3>
            <p class="feature-text">Bibendum enim facilisis gravida neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-style2">
            <div class="feature-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/f-1-2.svg" ?> alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Brilliant Idea</h3>
            <p class="feature-text">Bibendum enim facilisis gravida neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-style2">
            <div class="feature-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/f-1-3.svg" ?> alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Perfect Work</h3>
            <p class="feature-text">Bibendum enim facilisis gravida neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-style2">
            <div class="feature-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/f-1-4.svg" ?> alt="feature icon 1">
            </div>
            <h3 class="feature-title h5">Support 24/7</h3>
            <p class="feature-text">Bibendum enim facilisis gravida neque convallis a cras. At augue an eget arcu dictum
              varius duis at. Aliquet eget sit amet tellus cras.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Feature Area End -->
  <!-- Upcoming Events -->
  <section class="events-layout2">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-8 col-md-10 col-xl-7 col-xxl-6">
          <div class="text-center title-area">
            <span class="sec-subtitle2">Upcoming Events</span>
            <h2 class="sec-title">Explore Our Next Upcoming Awesome Events</h2>
          </div>
        </div>
      </div>
      <div class="events-slide2 fadeInUp row vs-carousel wow" data-slide-show="1" data-center-mode="true"
        data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true"
        data-center-padding="370px" data-xl-center-padding="370px" data-ml-center-padding="300px"
        data-lg-center-padding="200px" data-md-center-padding="80px">
        <div class="col-lg-4 col-md-6">
          <div class="event-style2">
            <div class="event-img">
              <div class="overlay"></div>
              <img class="img" src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-2-1.jpg" ?> alt="e 1 1">
              <div class="event-date">
                <span>20</span>
                January
              </div>
              <h3 class="event-title"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="event-style2">
            <div class="event-img">
              <div class="overlay"></div>
              <img class="img" src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-2-2.jpg" ?> alt="e 1 1">
              <div class="event-date">
                <span>20</span>
                January
              </div>
              <h3 class="event-title"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="event-style2">
            <div class="event-img">
              <div class="overlay"></div>
              <img class="img" src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-2-3.jpg" ?> alt="e 1 1">
              <div class="event-date">
                <span>20</span>
                January
              </div>
              <h3 class="event-title"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="event-style2">
            <div class="event-img">
              <div class="overlay"></div>
              <img class="img" src=<?= $_ENV['PATH_LINK'] . "assets/img/events/e-2-1.jpg" ?> alt="e 1 1">
              <div class="event-date">
                <span>20</span>
                January
              </div>
              <h3 class="event-title"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
            </div>
            <div class="event-content">
              <div class="event-meta">
                <ul>
                  <li>
                    <span><i class="fa-clock fas"></i>08:00am - 22:00pm</span>
                  </li>
                  <li>
                    <span><i class="fa-map-marker-alt fas"></i>245x Town 1214 Street, US</span>
                  </li>
                </ul>
              </div>
              <h3 class="event-title h5"><a href="event-details.html">Happy New Year Reunion And Music Festival</a></h3>
              <p class="event-text">Lorem ipsulm siteli amet, dogflor consectetur iscing elit. siteli ipsulm
                am adipiscing elit.</p>
              <div class="event-footer">
                <a href="event-details.html" class="event-link">Tickets & Details</a>
                <span class="event-price">Price: <span>$199</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Upcoming Events End -->
  <!-- Counter Area Start -->
  <div class="position-relative">
    <div class="counter-wrap2">
      <div class="overlay"></div>
      <img class="shape-1" src=<?= $_ENV['PATH_LINK'] . "assets/img/shapes/c-1-1.png" ?> alt="shape1">
      <img class="shape-2" src=<?= $_ENV['PATH_LINK'] . "assets/img/shapes/c-1-2.png" ?> alt="shape2">
      <div class="container fadeInUp wow" data-wow-delay="0.2s">
        <div class="justify-content-between g-4 row">
          <div class="col-6 col-lg-auto">
            <div class="count-start counter-media">
              <div class="counter-media__icon"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/c-1-1.svg" ?> alt="icon"></div>
              <div class="media-body">
                <span class="counter-media__number"><span class="counters" data-counter="858">858</span>+</span>
                <p class="counter-media__title">Successful Projects</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-auto">
            <div class="count-start counter-media">
              <div class="counter-media__icon"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/c-1-2.svg" ?> alt="icon"></div>
              <div class="media-body">
                <span class="counter-media__number"><span class="counters" data-counter="567">567</span>+</span>
                <p class="counter-media__title">Media Activities</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-auto">
            <div class="count-start counter-media">
              <div class="counter-media__icon"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/c-1-3.svg" ?> alt="icon"></div>
              <div class="media-body">
                <span class="counter-media__number"><span class="counters" data-counter="15">15</span>+</span>
                <p class="counter-media__title">Skilled Experts</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-auto">
            <div class="count-start counter-media">
              <div class="counter-media__icon"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/c-1-4.svg" ?> alt="icon"></div>
              <div class="media-body">
                <span class="counter-media__number"><span class="counters" data-counter="30">30</span>+</span>
                <p class="counter-media__title">Happy Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Counter Area End -->
  <!-- Testimonial Area -->
  <section class="space-top space-bottom overflow-hidden smoke-bg">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6">
          <div class="text-center title-area">
            <span class="sec-subtitle2">Testimonials</span>
            <h2 class="sec-title">Our Clint’s Feedback And Reviews</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="test-wrap2">
      <div class="row vs-carousel" data-slide-show="1" data-center-mode="true" data-xl-center-mode="true"
        data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-center-padding="630px"
        data-xl-center-padding="420px" data-ml-center-padding="300px" data-lg-center-padding="150px"
        data-md-center-padding="80px" id="testi-slider1">
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-1.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Rivanur R. Rafi</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-4.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Ute Kirsch</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-3.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Jan Mehler</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-2.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Tom Bauer</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-1.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Matthias Nacht</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
        <div class="col-auto">
          <div class="testi-style1">
            <div class="testi-icon">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/icons/t-1-1.svg" ?> alt="testi icon">
            </div>
            <div class="testi-author">
              <div class="author-img"><img src=<?= $_ENV['PATH_LINK'] . "assets/img/user/user-img-1-2.jpg" ?> alt="Testimonial"></div>
              <div class="media-body">
                <h3 class="testi-name">Daniel Bar</h3>
                <div class="testi-degi">CEO, EventsBD</div>
              </div>
            </div>
            <div class="testi-rating">
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
              <i class="fa-star fas"></i>
            </div>
            <p class="testi-text">“Varius sit amet mattis vulputate. Nulla posuere sollicitudin on The aliquam
              ultrices sagittis orci a. Nunc non blandit massa enim. Fermentum posuere urna nec tincidunt praesent
              semper feugiat nibh. Dolor magna eget est lorem ipsum dolor sit amet endrerit dolor.”</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Area End -->
  <!-- Team Area -->
  <section class="space-top space-extra-bottom">
    <div class="container">
      <div class="align-items-end justify-content-between row">
        <div class="col-lg-5">
          <div class="title-area">
            <span class="sec-subtitle">Team Member</span>
            <h2 class="sec-title">Get A New Experience With Eventino</h2>
          </div>
        </div>
        <div class="col-auto">
          <div class="sec-btns">
            <button class="vs-btn" data-slick-prev="#team-slider1">
              <i class="fa-arrow-left far"></i>Prev
            </button>
            <button class="vs-btn" data-slick-next="#team-slider1">Next
              <i class="fa-arrow-right far"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" id="team-slider1">
        <div class="col-lg-4">
          <div class="team-style1">
            <div class="team-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/team/team-1-1.jpg" ?> alt="team image">
            </div>
            <div class="team-body">
              <div class="team-content">
                <div>
                  <h4 class="team-name">Rivanur R. Rafi</h4>
                  <span class="team-degi">CEO, Events BD</span>
                </div>
                <div>
                  <div class="team-social">
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><i class="fa-share-alt far"></i></a>
                        <ul>
                          <li><a href="#"><i class="fa-facebook-f fab"></i></a></li>
                          <li><a href="#"><i class="fa-twitter fab"></i></a></li>
                          <li><a href="#"><i class="fa-instagram fab"></i></a></li>
                          <li><a href="#"><i class="fa-youtube fab"></i></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="team-bottom">
                <li>
                  <a href="tel:+88 (099) 8764 321">
                    <span><i class="fa-phone-alt fas"></i></span>+88 (099) 8764 321
                  </a>
                </li>
                <li>
                  <a href="mailto:info@example.com">
                    <span><i class="fa-envelope fas"></i></span>info@example.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-style1">
            <div class="team-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/team/team-1-2.jpg" ?> alt="team image">
            </div>
            <div class="team-body">
              <div class="team-content">
                <div>
                  <h4 class="team-name">Christina Zimmerman</h4>
                  <span class="team-degi">CEO, Events BD</span>
                </div>
                <div>
                  <div class="team-social">
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><i class="fa-share-alt far"></i></a>
                        <ul>
                          <li><a href="#"><i class="fa-facebook-f fab"></i></a></li>
                          <li><a href="#"><i class="fa-twitter fab"></i></a></li>
                          <li><a href="#"><i class="fa-instagram fab"></i></a></li>
                          <li><a href="#"><i class="fa-youtube fab"></i></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="team-bottom">
                <li>
                  <a href="tel:+88 (099) 8764 321">
                    <span><i class="fa-phone-alt fas"></i></span>+88 (099) 8764 321
                  </a>
                </li>
                <li>
                  <a href="mailto:info@example.com">
                    <span><i class="fa-envelope fas"></i></span>info@example.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-style1">
            <div class="team-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/team/team-1-3.jpg" ?> alt="team image">
            </div>
            <div class="team-body">
              <div class="team-content">
                <div>
                  <h4 class="team-name">Erik Huber</h4>
                  <span class="team-degi">CEO, Events BD</span>
                </div>
                <div>
                  <div class="team-social">
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><i class="fa-share-alt far"></i></a>
                        <ul>
                          <li><a href="#"><i class="fa-facebook-f fab"></i></a></li>
                          <li><a href="#"><i class="fa-twitter fab"></i></a></li>
                          <li><a href="#"><i class="fa-instagram fab"></i></a></li>
                          <li><a href="#"><i class="fa-youtube fab"></i></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="team-bottom">
                <li>
                  <a href="tel:+88 (099) 8764 321">
                    <span><i class="fa-phone-alt fas"></i></span>+88 (099) 8764 321
                  </a>
                </li>
                <li>
                  <a href="mailto:info@example.com">
                    <span><i class="fa-envelope fas"></i></span>info@example.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-style1">
            <div class="team-img">
              <img src=<?= $_ENV['PATH_LINK'] . "assets/img/team/team-1-4.jpg" ?> alt="team image">
            </div>
            <div class="team-body">
              <div class="team-content">
                <div>
                  <h4 class="team-name">Rivanur R. Rafi</h4>
                  <span class="team-degi">CEO, Events BD</span>
                </div>
                <div>
                  <div class="team-social">
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><i class="fa-share-alt far"></i></a>
                        <ul>
                          <li><a href="#"><i class="fa-facebook-f fab"></i></a></li>
                          <li><a href="#"><i class="fa-twitter fab"></i></a></li>
                          <li><a href="#"><i class="fa-instagram fab"></i></a></li>
                          <li><a href="#"><i class="fa-youtube fab"></i></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="team-bottom">
                <li>
                  <a href="tel:+88 (099) 8764 321">
                    <span><i class="fa-phone-alt fas"></i></span>+88 (099) 8764 321
                  </a>
                </li>
                <li>
                  <a href="mailto:info@example.com">
                    <span><i class="fa-envelope fas"></i></span>info@example.com
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Area end -->

  <!--********************************
      Code End  Here 
  ******************************** -->
  <!--==============================
        All Js File
    ============================== -->
<?php include __DIR__ . "/parties/_footer.php" ?>