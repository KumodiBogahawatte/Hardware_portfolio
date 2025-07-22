// Preloader
        window.addEventListener('load', function() {
            const preloader = document.querySelector('.preloader');
            preloader.classList.add('fade-out');
            
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Mobile Navigation
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Active navigation link based on scroll position
        const sections = document.querySelectorAll('section');
        const navItems = document.querySelectorAll('.nav-links a');

        function activateNavItem() {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === `#${current}`) {
                    item.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', activateNavItem);
        activateNavItem(); // Run once on page load

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Hero Slider
        const heroSwiper = new Swiper('.hero-slider .swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-slider .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.hero-slider .swiper-button-next',
                prevEl: '.hero-slider .swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

        // Testimonial Slider
        const testimonialSwiper = new Swiper('.testimonial-slider .swiper', {
            loop: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-slider .swiper-pagination',
                clickable: true,
            },
        });

        // LightGallery for image gallery
        lightGallery(document.getElementById('lightgallery'), {
            selector: 'a',
            download: false,
            counter: false,
            enableDrag: false,
            speed: 300,
            mode: 'lg-fade',
            cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)'
        });

        // Product Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                
                const filter = btn.dataset.filter;
                
                productCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Back to Top Button
        const backToTopBtn = document.querySelector('.back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('active');
            } else {
                backToTopBtn.classList.remove('active');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Form Submission with Toast Notification
        const contactForm = document.getElementById('contactForm');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toast-message');
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            // Here you would typically send the form data to a server using fetch or AJAX
            // For this example, we'll simulate a successful submission
            
            // Show toast notification
            toastMessage.textContent = 'Thank you for your message! We will contact you soon.';
            toast.classList.add('show');
            
            // Hide toast after 5 seconds
            setTimeout(() => {
                toast.classList.remove('show');
            }, 5000);
            
            // Reset the form
            contactForm.reset();
        });

        // Add to Cart functionality with animation
        // document.querySelectorAll('.add-to-cart').forEach(button => {
        //     button.addEventListener('click', (e) => {
        //         e.preventDefault();
        //         const productCard = button.closest('.product-card');
        //         const productName = productCard.querySelector('.product-title').textContent;
                
        //         // Add animation class
        //         button.innerHTML = '<i class="fas fa-check"></i>';
        //         button.style.backgroundColor = '#2ecc71';
                
        //         // Show toast notification
        //         toastMessage.textContent = `${productName} added to cart!`;
        //         toast.classList.add('show');
                
        //         // Hide toast after 3 seconds
        //         setTimeout(() => {
        //             toast.classList.remove('show');
        //         }, 3000);
                
        //         // Reset button after animation
        //         setTimeout(() => {
        //             button.innerHTML = '<i class="fas fa-shopping-cart"></i>';
        //             button.style.backgroundColor = '';
        //         }, 1000);
        //     });
        // });

        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        const newsletterInput = newsletterForm.querySelector('input');
        
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            if (newsletterInput.value.trim() !== '') {
                // Show success toast
                toastMessage.textContent = 'Thank you for subscribing!';
                toast.classList.add('show');
                
                // Hide toast after 3 seconds
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
                
                // Reset form
                newsletterForm.reset();
            }
        });

        // Animate elements on scroll
        // function animateOnScroll() {
        //     const elements = document.querySelectorAll('.service-card, .product-card, .feature-item');
            
        //     elements.forEach(element => {
        //         const elementPosition = element.getBoundingClientRect().top;
        //         const screenPosition = window.innerHeight / 1.2;
                
        //         if (elementPosition < screenPosition) {
        //             element.style.opacity = '1';
        //             element.style.transform = 'translateY(0)';
        //         }
        //     });
        // }

        // // Set initial state for animated elements
        // document.querySelectorAll('.service-card, .product-card, .feature-item').forEach(element => {
        //     element.style.opacity = '0';
        //     element.style.transform = 'translateY(30px)';
        //     element.style.transition = 'opacity 0.5s ease, transform 0.2s ease';
        // });

        // window.addEventListener('scroll', animateOnScroll);
        // animateOnScroll(); // Run once on page load

        // // Pulse animation for featured products
        // function pulseFeaturedProducts() {
        //     const featuredProducts = document.querySelectorAll('.product-badge');
            
        //     featuredProducts.forEach(badge => {
        //         badge.style.animation = 'pulse 2s infinite';
        //     });
        // }
        
        // pulseFeaturedProducts();

// Add this after your existing JS
document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Hero text animation with GSAP
    // gsap.from('.hero-content h1', {
    //     y: 50,
    //     duration: 1,
    //     ease: 'power3.out',
    //     color: 'var(--light)'
    // });
    
    // gsap.from('.hero-content p', {
    //     y: 50,
    //     duration: 1,
    //     delay: 0.3,
    //     ease: 'power3.out',
    //     color: 'var(--light)'
    // });
    
    // gsap.from('.hero-content .btn', {
    //     y: 50,
    //     duration: 1,
    //     delay: 0.6,
    //     ease: 'power3.out',
    //     color: 'var(--light)'
    // });

    // Section animations
    gsap.utils.toArray('.section').forEach(section => {
        ScrollTrigger.create({
            trigger: section,
            start: "top 80%",
            onEnter: () => {
                gsap.from(section.querySelectorAll('.section-title h2'), {
                    opacity: 0,
                    y: 50,
                    duration: 0.8,
                    stagger: 0.1
                });
            }
        });
    });

    // Tilt effect for product cards
    // if (window.innerWidth > 768) {
    //     $('.product-card').tilt({
    //         maxTilt: 7,
    //         perspective: 1000,
    //         easing: "cubic-bezier(.03,.98,.52,.99)",
    //         scale: 1.02,
    //         speed: 500,
    //         transition: true
    //     });
    // }
});

// 3D floating logo effect (optional)
// function initFloatingLogo() {
//     if (document.querySelector('.logo img') && window.innerWidth > 992) {
//         const logo = document.querySelector('.logo img');
//         let mouseX = 0, mouseY = 0;
//         let xp = 0, yp = 0;
        
//         document.addEventListener('mousemove', (e) => {
//             mouseX = e.clientX - window.innerWidth/2;
//             mouseY = e.clientY - window.innerHeight/2;
//         });
        
//         const animate = () => {
//             xp += (mouseX - xp) / 10;
//             yp += (mouseY - yp) / 10;
            
//             logo.style.transform = `rotateY(${xp/20}deg) rotateX(${-yp/20}deg)`;
//             requestAnimationFrame(animate);
//         };
        
//         animate();
//     }
// }

// window.addEventListener('load', initFloatingLogo);