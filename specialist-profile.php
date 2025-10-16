<?php include "header.php" ?>
<style>
    header.main-header .header-sticky {
    padding: 15px 0;
    background: #222222;
    border: none;
    }
</style>
<div class="SalonSp">
        <!-- Navigation -->
        <nav class="navbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Nail Stylists</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihadiva Nails by Vania</li>
                        </ol>

                    </nav>
                    <!-- <a href="#" class="login-link">Login / Profiel</a> -->
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="container mt-4">
            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-8">
                    <!-- Profile Header -->
                    <div class="profile-header">
    <div class="d-flex align-items-start gap-4 mb-4">
        <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Vania" class="profile-image">
        <div class="flex-grow-1">
            <h1 class="profile-name">Hair by Vania</h1>
            <p class="salon-location">Flexz Salon, Eindhoven</p>
            <!-- <div class="d-flex align-items-center mb-3">
                <div class="rating-stars">
                    <span class="filled">★</span>
                    <span class="filled">★</span>
                    <span class="filled">★</span>
                    <span class="filled">★</span>
                    <span class="filled">★</span>
                </div>
                <span class="rating-number">4.9</span>
                <span class="review-count">32 reviews</span>
            </div> -->
            <div class="d-flex flex-wrap gap-2 connectBtns">
                <a href="#" class="btn btn-book" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</a>
                <a href="#" class="btn btn-whatsapp">
                    <iconify-icon icon="mdi:whatsapp"></iconify-icon> WhatsApp
                </a>
                <a href="#" class="btn btn-instagram">
                    <iconify-icon icon="iconoir:instagram"></iconify-icon>
                    Follow on Instagram
                </a>
            </div>
        </div>
    </div>

    <!-- Bio -->
    <div class="bioSp">
        <h6>Bio</h6>
        <p class="bio-text">
            Professional hairstylist with a passion for modern cuts, natural color blends, and effortless styling. 
            Dedicated to helping every client discover a look that enhances their individuality and confidence. 
            From soft balayage to precision cuts, I aim to create styles that feel as good as they look.
        </p>
        <p class="booking-note">
            <iconify-icon icon="mdi:pencil"></iconify-icon>
            Book your appointment through WhatsApp, Instagram, or contact us directly.
        </p>
    </div>
</div>


                    <!-- Category Tabs -->
                    <!-- <div class="category-tabs">
                        <a href="#" class="category-tab">
                            <div class="category-icon">
                                <iconify-icon icon="mdi:heart-outline"></iconify-icon>
                            </div>
                            <span class="category-label">Before/After</span>
                        </a>
                        <a href="#" class="category-tab">
                            <div class="category-icon">
                                <iconify-icon icon="mdi:nail-polish"></iconify-icon>
                            </div>
                            <span class="category-label">Nali art</span>
                        </a>
                        <a href="#" class="category-tab">
                            <div class="category-icon">
                                <iconify-icon icon="mdi:medal-outline"></iconify-icon>
                            </div>
                            <span class="category-label">Clients</span>
                        </a>
                    </div> -->

                     <!-- Portfolio Section -->
                    <div class="portfolio-section">
                        <h2 class="section-title">Portfolio</h2>
                        <div class="portfolio-grid">
                            <div class="portfolio-item" onclick="openGallery(0)">
                                <img src="images/new-images/h1.jpg" alt="Portfolio 1">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(1)">
                                <img src="images/new-images/h2.jpg" alt="Portfolio 2">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(2)">
                                <img src="images/new-images/h3.jpg" alt="Portfolio 3">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(3)">
                                <img src="images/new-images/h4.jpg" alt="Portfolio 4">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(4)">
                                <img src="images/new-images/h5.jpg" alt="Portfolio 5">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(5)">
                                <img src="images/new-images/h6.jpg" alt="Portfolio 6">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(6)">
                                <img src="images/new-images/h7.jpg" alt="Portfolio 7">
                            </div>
                            <div class="portfolio-item" onclick="openGallery(7)">
                                <img src="images/new-images/h8.png" alt="Portfolio 8">
                            </div>
                        </div>
                        <button class="btn btn-see-more" data-bs-toggle="modal" data-bs-target="#galleryModal">See more</button>
                    </div>

                    <!-- Services Section -->
                    <div class="services-section">
                        <h2 class="section-title">Services</h2>
                        <div class="services-list">
                            <div class="service-item">
                                <div>
                                    <div class="service-name">Haircut & Styling</div>
                                    <div class="service-duration">60 min</div>
                                </div>
                                <div class="service-price">€50</div>
                            </div>

                            <div class="service-item">
                                <div>
                                    <div class="service-name">Wash, Blow-Dry & Finish</div>
                                    <div class="service-duration">45 min</div>
                                </div>
                                <div class="service-price">€40</div>
                            </div>

                            <div class="service-item">
                                <div>
                                    <div class="service-name">Hair Coloring & Toner</div>
                                    <div class="service-duration">90 min</div>
                                </div>
                                <div class="service-price">€85</div>
                            </div>

                            <div class="service-item">
                                <div>
                                    <div class="service-name">Balayage or Highlights</div>
                                    <div class="service-duration">120 min</div>
                                </div>
                                <div class="service-price">€120</div>
                            </div>

                            <div class="service-item">
                                <div>
                                    <div class="service-name">Keratin Treatment</div>
                                    <div class="service-duration">150 min</div>
                                </div>
                                <div class="service-price">€160</div>
                            </div>
                        </div>
                    </div>


                   

                    <!-- Reviews Section -->
                    <!-- <div class="reviews-section">
                        <div class="review-item">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <p class="review-text">Altijd perfecte nagels, gezellig en professioneel!</p>
                            <p class="review-author">Sara J.</p>
                        </div>
                        <div class="review-item">
                            <div class="review-rating">
                                ★★★★★
                            </div>
                            <p class="review-text">Mijn nieuwe vaste styliste!</p>
                            <p class="review-author">Laura B.</p>
                        </div>
                    </div> -->

                    <!-- More Stylists -->
                    <h3 class="more-stylists-title">More stylists nearby</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <a href="#" class="stylist-card">
                                    <img src="https://images.pexels.com/photos/1813272/pexels-photo-1813272.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Styled by Ava" class="stylist-image">
                                    <div>
                                        <div class="stylist-name">Styled by Ava</div>
                                        <div class="stylist-link">View Portfolio</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a href="#" class="stylist-card">
                                    <img src="https://images.pexels.com/photos/3993449/pexels-photo-3993449.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Luxe Hair Studio" class="stylist-image">
                                    <div>
                                        <div class="stylist-name">Luxe Hair Studio</div>
                                        <div class="stylist-link">View Portfolio</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a href="#" class="stylist-card">
                                    <img src="https://images.pexels.com/photos/3993326/pexels-photo-3993326.jpeg?auto=compress&cs=tinysrgb&w=200" alt="Glow by Emma" class="stylist-image">
                                    <div>
                                        <div class="stylist-name">Glow by Emma</div>
                                        <div class="stylist-link">View Portfolio</div>
                                    </div>
                                </a>
                            </div>
                        </div>



                    <!-- About the Salon -->
                    <div class="about-salon-section">
                            <h2 class="section-title">About the Salon</h2>

                            <div class="salon-badge">
                                <div class="badge-icon">🌟</div>
                                <div>
                                    <div class="badge-text">Highly Rated</div>
                                </div>
                                <div class="ms-auto">
                                    <div class="salon-rating">
                                        5.0
                                        <span class="rating-stars">★★★★★</span>
                                    </div>
                                </div>
                            </div>

                            <p class="salon-description mb-3">A favorite among clients in the area for its warm atmosphere and trusted specialists · 5 reviews</p>

                            <div class="amenities-highlight">
                                <div class="highlight-item">
                                    <div class="highlight-icon">
                                        <iconify-icon icon="mdi:map-marker"></iconify-icon>
                                    </div>
                                    <div class="highlight-content">
                                        <h4>Central Location</h4>
                                        <p>Easy to reach with nearby parking and public transport access.</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <div class="highlight-icon">
                                        <iconify-icon icon="mdi:sofa"></iconify-icon>
                                    </div>
                                    <div class="highlight-content">
                                        <h4>Comfortable & Clean Space</h4>
                                        <p>Modern interiors with a relaxing vibe where every detail ensures comfort and hygiene.</p>
                                    </div>
                                </div>
                                <div class="highlight-item">
                                    <div class="highlight-icon">
                                        <iconify-icon icon="mdi:account-star"></iconify-icon>
                                    </div>
                                    <div class="highlight-content">
                                        <h4>Experienced Professionals</h4>
                                        <p>Our specialists are known for their creativity, care, and attention to every client’s unique style.</p>
                                    </div>
                                </div>
                            </div>

                            <span class="vibe-badge">Relaxed & Friendly Atmosphere</span>

                            <p class="salon-description">Step into a space where beauty meets comfort — designed to make you feel confident and cared for.</p>
                            <p class="salon-description">We focus on personalized experiences and long-lasting results for every client.</p>
                            <p class="salon-description">Visit us and enjoy the quality, warmth, and professionalism that make our salon stand out.</p>
                        </div>


                    <!-- Availability -->
                    <div class="availability-section">
                        <h2 class="section-title">Availabilities</h2>
                        <div class="availability-item">
                            <span class="day-name">Monday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                        <div class="availability-item">
                            <span class="day-name">Tuesday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                        <div class="availability-item">
                            <span class="day-name">Wednesday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                        <div class="availability-item">
                            <span class="day-name">Thursday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                        <div class="availability-item">
                            <span class="day-name">Friday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                        <div class="availability-item">
                            <span class="day-name">Saturday</span>
                            <span class="day-hours">09:00 AM - 06:00 PM</span>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="map-section">
                        <h2 class="section-title">Where you'll be</h2>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.5436193436!2d5.478633315747!3d51.44124587962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d91d05e7b835%3A0x3e8e5a5e8c8c8c8c!2sEindhoven%2C%20Netherlands!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <p class="location-text">Surry Hills, NSW</p>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!-- Contact Info Card -->
                        <div class="contact-card">
                            <h3 class="contact-title">Contact Info</h3>
                            <div class="contact-item">
                                <iconify-icon icon="mdi:map-marker"></iconify-icon>
                                <div>
                                    <div>Flexz Salon</div>
                                    <div>Eindhovenseweg 3</div>
                                    <div>Eindhoven</div>
                                </div>
                            </div>
                            <div class="contact-item">
                                <iconify-icon icon="mdi:phone"></iconify-icon>
                                <span>+31 6 1234 5678</span>
                            </div>
                            <div class="contact-item">
                                <iconify-icon icon="mdi:email"></iconify-icon>
                                <span>vania@lihadivanails.nl</span>
                            </div>
                            <div class="contact-item">
                                <iconify-icon icon="mdi:instagram"></iconify-icon>
                                <span>@lihadivanails</span>
                            </div>
                            <!-- <div class="contact-item">
                                <iconify-icon icon="mdi:web"></iconify-icon>
                                <span>www.lihadivanails.nl</span>
                            </div> -->
                        </div>

                        <!-- Amenities Card -->
                        <div class="amenities-card">
                            <h3 class="amenities-title">What this salon offers</h3>
                            <div class="amenities-grid">
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:air-conditioner"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Air Conditioning</span>
                                </div>
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:wifi"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Free WiFi</span>
                                </div>
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:coffee"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Complimentary Drinks</span>
                                </div>
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:parking"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Free Parking</span>
                                </div>
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:wheelchair-accessibility"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Wheelchair Accessible</span>
                                </div>
                                <div class="amenity-item">
                                    <div class="amenity-icon">
                                        <iconify-icon icon="mdi:music"></iconify-icon>
                                    </div>
                                    <span class="amenity-name">Relaxing Music</span>
                                </div>
                            </div>
                            <button class="btn btn-show-all" data-bs-toggle="modal" data-bs-target="#amenitiesModal">Show all amenities</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Modal -->
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel">Portfolio Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-gallery">
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h1.jpg" alt="Gallery 1">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h2.jpg" alt="Gallery 2">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h3.jpg" alt="Gallery 3">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h4.jpg" alt="Gallery 4">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h5.jpg" alt="Gallery 5">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h6.jpg" alt="Gallery 6">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h7.jpg" alt="Gallery 7">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h8.png" alt="Gallery 8">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h9.jpg" alt="Gallery 9">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h10.jpg" alt="Gallery 10">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h11.jpg" alt="Gallery 11">
                            </div>
                            <div class="modal-gallery-item">
                                <img src="images/new-images/h13.jpg" alt="Gallery 12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Amenities Modal -->
       <!-- Amenities Modal -->
<div class="modal fade" id="amenitiesModal" tabindex="-1" aria-labelledby="amenitiesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amenitiesModalLabel">All Amenities</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="amenities-grid">
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:air-conditioner"></iconify-icon>
                        </div>
                        <span class="amenity-name">Air Conditioning</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:wifi"></iconify-icon>
                        </div>
                        <span class="amenity-name">Free WiFi</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:coffee"></iconify-icon>
                        </div>
                        <span class="amenity-name">Complimentary Drinks</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:parking"></iconify-icon>
                        </div>
                        <span class="amenity-name">Free Parking</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:music"></iconify-icon>
                        </div>
                        <span class="amenity-name">Relaxing Music</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:flower"></iconify-icon>
                        </div>
                        <span class="amenity-name">Aesthetic Interior</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:water"></iconify-icon>
                        </div>
                        <span class="amenity-name">Filtered Water</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:account-heart"></iconify-icon>
                        </div>
                        <span class="amenity-name">Friendly Staff</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:baby-carriage"></iconify-icon>
                        </div>
                        <span class="amenity-name">Child Friendly</span>
                    </div>
                    <div class="amenity-item">
                        <div class="amenity-icon">
                            <iconify-icon icon="mdi:leaf"></iconify-icon>
                        </div>
                        <span class="amenity-name">Eco-Friendly Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Specialist</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="contactName" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMobile" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" id="contactMobile" placeholder="Enter your mobile number" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="contactMessage" rows="4" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
    </div>
<?php include "footer.php" ?>

<script>
        function openGallery(index) {
            const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));
            galleryModal.show();
        }
    </script>