<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Rathmini Hardware - Quality Hardware Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

    <!-- Three.js (for any 3D elements) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- jQuery CDN (use a reliable version) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Tilt.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="images/logo-white.png" alt="">
        <!-- <div class="loader"></div> -->
    </div>

    <!-- Header & Navigation -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="index.html"><img src="images/logo-back.png" alt="New Rathmini Hardware Logo"></a>
                    <!-- <h1>New <span>Rathmini</span> Hardware</h1> -->
                </div>
                <ul class="nav-links">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <!-- <li><a href="#services">Services</a></li> -->
                    <li><a href="#products">Products</a></li>
                    <!-- <li><a href="#testimonials">Testimonials</a></li> -->
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
                <div class="phone-info">
                    <a href="tel:+94712345678" class="phone-link">
                        <i class="fas fa-phone-alt"></i>
                        <span>071 234 5678</span>
                    </a>
                </div>
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Slider -->
    <section class="hero-slider" id="home">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-1">
                    <div class="hero-content">
                        <h1 data-aos="fade-up" data-aos-delay="100" data-aos-mirror="true"
        data-aos-once="false">Quality Hardware Solutions</h1>
                        <p>Your trusted partner for all hardware needs. We provide top-quality products and exceptional service.</p>
                        <a href="#contact" class="btn">Get In Touch</a>
                    </div>
                </div>
                <div class="swiper-slide hero-slide-2">
                    <div class="hero-content">
                        <h1 data-aos="fade-up" data-aos-delay="100" data-aos-mirror="true"
        data-aos-once="false">Wide Range of Products</h1>
                        <p>From tools to building materials, we have everything you need for your projects.</p>
                        <a href="#products" class="btn">View Products</a>
                    </div>
                </div>
                <div class="swiper-slide hero-slide-3">
                    <div class="hero-content">
                        <h1 data-aos="fade-up" data-aos-delay="100" data-aos-mirror="true"
        data-aos-once="false">Expert Advice</h1>
                        <p>Our knowledgeable staff is always ready to help you find the right solutions.</p>
                        <a href="#services" class="btn">Our Services</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
            </div>
            <div class="about-content">
                <div class="about-img">
                    <img src="images/about/about.jpg" alt="About New Rathmini Hardware">
                </div>
                <div class="about-text">
                    <h3>Your Trusted Hardware Partner Since 1995</h3>
                    <p>New Rathmini Hardware has been serving the community with quality hardware products and expert advice for over 25 years. Our commitment to excellence and customer satisfaction has made us the preferred choice for contractors, builders, and DIY enthusiasts alike.</p>
                    <p>We stock a comprehensive range of hardware products from trusted brands, ensuring you get the best quality for your projects. Our knowledgeable staff is always ready to assist you in finding the right solutions for your needs.</p>
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4>Quality Products</h4>
                                <p>Sourced from reputable manufacturers</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <h4>Fast Delivery</h4>
                                <p>Prompt delivery services available</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h4>Expert Support</h4>
                                <p>Knowledgeable staff to assist you</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <div>
                                <h4>Competitive Pricing</h4>
                                <p>Affordable prices without compromising quality</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="services" id="services">
            <div class="container">
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
                <div class="services-container">
                    <div class="service-card"\>
                        <div class="service-img">
                            <img src="images/serviceSection/img3.jpg" alt="Product Supply">
                        </div>
                        <div class="service-content">
                            <h3>Comprehensive Product Supply</h3>
                            <p>We offer a wide range of hardware products including tools, fasteners, plumbing supplies, electrical components, and building materials from top brands.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="images/serviceSection/img1.jpg" alt="Consultation">
                        </div>
                        <div class="service-content">
                            <h3>Expert Consultation</h3>
                            <p>Our experienced staff provides professional advice to help you select the right products for your specific project requirements and budget.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="images/serviceSection/img2.png" alt="Delivery">
                        </div>
                        <div class="service-content">
                            <h3>Reliable Delivery Service</h3>
                            <p>We provide prompt and reliable delivery services for both small and bulk orders to your home or construction site.</p>
                            <a href="#" class="read-more">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials" id="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Customers Say</h2>
                </div>
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-text">
                                        I've been shopping at New Rathmini Hardware for years, and their service is consistently excellent. They always have what I need, and their staff is incredibly knowledgeable.
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John D.">
                                        </div>
                                        <div class="author-name">John D.</div>
                                        <div class="author-role">Contractor</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-text">
                                        The quality of products at New Rathmini Hardware is unmatched in the area. Their prices are competitive, and they stand behind everything they sell. Highly recommended!
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah M.">
                                        </div>
                                        <div class="author-name">Sarah M.</div>
                                        <div class="author-role">Homeowner</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-text">
                                        As a professional builder, I rely on New Rathmini Hardware for all my project needs. Their delivery service saves me time, and their product selection is comprehensive.
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Robert K.">
                                        </div>
                                        <div class="author-name">Robert K.</div>
                                        <div class="author-role">Builder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Products Section -->
    <section class="section products" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Our Products</h2>
            </div>
            <div class="product-filters">
                <button class="filter-btn active" data-filter="all">All Products</button>
                <button class="filter-btn" data-filter="tools">Tools</button>
                <button class="filter-btn" data-filter="fasteners">Fasteners</button>
                <button class="filter-btn" data-filter="plumbing">Plumbing</button>
                <button class="filter-btn" data-filter="electrical">Electrical</button>
                <button class="filter-btn" data-filter="building">Building Materials</button>
            </div>
            <div class="products-container">
                <div class="product-card" data-category="tools">
                    <div class="product-img">
                        <img src="images/products/HeavyDutyPowerDrill.jpg" alt="Power Drill">
                        <span class="product-badge">Popular</span>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Tools</span>
                        <h3 class="product-title">Heavy Duty Power Drill</h3>
                        <div class="product-price">
                            <span class="price">Rs.2600</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="fasteners">
                    <div class="product-img">
                        <img src="images/products/AssortedScrewsSet.jpg" alt="Screws">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Fasteners</span>
                        <h3 class="product-title">Assorted Screws Set</h3>
                        <div class="product-price">
                            <span class="price">Rs.1250</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="plumbing">
                    <div class="product-img">
                        <img src="images/products/PVCPipesSet.jpg" alt="Pipes">
                        <span class="product-badge">New</span>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Plumbing</span>
                        <h3 class="product-title">PVC Pipes Set</h3>
                        <div class="product-price">
                            <span class="price">Rs.1500</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="electrical">
                    <div class="product-img">
                        <img src="images/products/CopperWires.jpg" alt="Wires">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Electrical</span>
                        <h3 class="product-title">Copper Wires (100ft)</h3>
                        <div class="product-price">
                            <span class="price">Rs.1000</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="building">
                    <div class="product-img">
                        <img src="images/products/PlywoodSheets.jpg" alt="Plywood">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Building Materials</span>
                        <h3 class="product-title">Plywood Sheets (4x8ft)</h3>
                        <div class="product-price">
                            <span class="price">Rs.500</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="tools">
                    <div class="product-img">
                        <img src="images/products/ProfessionalHammer.jpg" alt="Hammer">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Tools</span>
                        <h3 class="product-title">Professional Hammer</h3>
                        <div class="product-price">
                            <span class="price">Rs.1500</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="fasteners">
                    <div class="product-img">
                        <img src="images/products/GalvanizedNails.jpg" alt="Nails">
                    </div>
                    <div class="product-content">
                        <span class="product-category">Fasteners</span>
                        <h3 class="product-title">Galvanized Nails (5lb)</h3>
                        <div class="product-price">
                            <span class="price">Rs.50</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="plumbing">
                    <div class="product-img">
                        <img src="images/products/ModernKitchenFaucet.jpg" alt="Faucet">
                        <span class="product-badge">Sale</span>
                    </div>
                    <div class="product-content">
                        <span class="product-category">Plumbing</span>
                        <h3 class="product-title">Modern Kitchen Faucet</h3>
                        <div class="product-price">
                            <span class="price">Rs.2300</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Gallery Section -->
    <section class="section gallery" id="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Our Gallery</h2>
            </div>
            <div class="gallery-container" id="lightgallery">
                <a href="images/serviceSection/img4.jpg" class="gallery-item">
                    <img src="images/serviceSection/img4.jpg" alt="Hardware Store">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/serviceSection/img5.jpg" class="gallery-item">
                    <img src="images/serviceSection/img5.jpg" alt="Products">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/serviceSection/img6.jpg" class="gallery-item">
                    <img src="images/serviceSection/img6.jpg" alt="Tools">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/serviceSection/img7.jpg" class="gallery-item">
                    <img src="images/serviceSection/img7.jpg" alt="Staff">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/products/ModernKitchenFaucet.jpg" class="gallery-item">
                    <img src="images/products/ModernKitchenFaucet.jpg" alt="Delivery">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/products/PlywoodSheets.jpg" class="gallery-item">
                    <img src="images/products/PlywoodSheets.jpg" alt="Products">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/products/ProfessionalHammer.jpg" class="gallery-item">
                    <img src="images/products/ProfessionalHammer.jpg" alt="Products">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
                <a href="images/products/PVCPipesSet.jpg" class="gallery-item">
                    <img src="images/products/PVCPipesSet.jpg" alt="Products">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus gallery-icon"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Location</h3>
                            <p>123 Hardware Street, Colombo, Sri Lanka</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Phone Number</h3>
                            <a href="tel:0766644681">076 664 4681</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email Address</h3>
                            <a href="mailto:info@newrathminihardware.com">info@newrathminihardware.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Opening Hours</h3>
                            <p>Mon - Sat: 8:00 AM - 6:00 PM</p>
                            <p>Sun: 9:00 AM - 3:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                    <!-- <p>Join us in mapping out new ideas, building lasting connections, and creating something extraordinary together.</p> -->
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group form-row">
                            <div class="form-col">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-col">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <!-- <img src="images/logo.png" alt="" class="footer-logo"> -->
                    <h3>About Us</h3>
                    <p>New Rathmini Hardware has been providing quality hardware solutions to the community since 1995. We pride ourselves on excellent customer service and top-quality products.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <!-- <li><a href="#services">Services</a></li> -->
                        <li><a href="#products">Products</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Products</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tools</a></li>
                        <li><a href="#">Fasteners</a></li>
                        <li><a href="#">Plumbing Supplies</a></li>
                        <li><a href="#">Electrical Components</a></li>
                        <li><a href="#">Building Materials</a></li>
                        <li><a href="#">Safety Equipment</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for the latest updates and offers.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your Email" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2023 New Rathmini Hardware. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Notification Toast -->
    <div class="toast" id="toast">
        <span id="toast-message">Message sent successfully!</span>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>