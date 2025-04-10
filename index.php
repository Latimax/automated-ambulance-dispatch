<?php

$page = 'home';

include 'header.php';
include 'navbar.php';
?>
<!-- Carousel Start -->
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="assets/img/carousel-1.jpg" class="img-fluid w-100" alt="Ambulance Service" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">REQUEST AMBULANCE SERVICE</h4>
                                    
                                    <form method="post" action="requests.php">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="caller_name">Caller Name</label>
                                                <input type="text" class="form-control" id="caller_name" name="caller_name" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="phone_number">Phone Number</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                            </div>
                                          
                                            <div class="col-6">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="school_area_id">School Area</label>
                                                <select class="form-control" id="school_area_id" name="school_area_id" required>
                                                    <?php
                                                    $stmt = $pdo->query('SELECT id, name FROM school_areas');
                                                    while ($row = $stmt->fetch()) {
                                                        echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['name']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="details">Details</label>
                                                <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
                                            </div>
                                           
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-light w-100 py-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Emergency? Get Immediate Assistance</h1>
                                    <p>Available 24/7 at Bayero University, Kano</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel-2.jpg" class="img-fluid w-100" alt="Ambulance Service" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">REQUEST AMBULANCE SERVICE</h4>
                                    <form method="post" action="requests.php">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label for="caller_name">Caller Name</label>
                                                <input type="text" class="form-control" id="caller_name" name="caller_name" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="phone_number">Phone Number</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                            </div>
                                          
                                            <div class="col-6">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="school_area_id">School Area</label>
                                                <select class="form-control" id="school_area_id" name="school_area_id" required>
                                                    <?php
                                                    $stmt = $pdo->query('SELECT id, name FROM school_areas');
                                                    while ($row = $stmt->fetch()) {
                                                        echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['name']) . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="details">Details</label>
                                                <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
                                            </div>
                                           
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-light w-100 py-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Fast and Reliable Ambulance Service</h1>
                                    <p>Serving the BUK Community</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-5 text-capitalize">AADS-BUK <span class="text-primary">About</span></h1>
                        <p class="mb-0">The Automated Ambulance Dispatch System at Bayero University, Kano, is dedicated to providing rapid and efficient emergency medical services to the university community, ensuring safety and well-being at all times.</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img src="assets/img/about-icon-1.png" class="img-fluid w-50 h-50" alt="Icon">
                                </div>
                                <h5 class="mb-3">Our Vision</h5>
                                <p class="mb-0">To be a leader in emergency medical response, setting the standard for university-based ambulance services in Nigeria.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4">
                                <div class="about-icon mb-4">
                                    <img src="assets/img/about-icon-2.png" class="img-fluid h-50 w-50" alt="Icon">
                                </div>
                                <h5 class="mb-3">Our Mission</h5>
                                <p class="mb-0">To provide timely and effective emergency medical services, ensuring the health and safety of students, staff, and visitors at Bayero University, Kano.</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-item my-4">With a commitment to excellence, we strive to deliver the highest quality of care and support, leveraging advanced technology and skilled personnel to respond to emergencies swiftly and efficiently.</p>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h1 class="display-6 text-white">17</h1>
                                <h5 class="text-light mb-0">Years Of Experience</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Rapid Response Times</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Highly Trained Personnel</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> State-of-the-Art Equipment</p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Community-Focused Service</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="#" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/attachment-img.jpg" class="img-fluid rounded-circle border border-4 border-secondary" style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>ADAM ZAHRADDIN SULEIMAN</h4>
                                    <p class="mb-0">AADS-BUK Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1">
                        <img src="assets/img/about-img.jpg" class="img-fluid rounded h-100 w-100" alt="">
                    </div>
                    <div class="img-2">
                        <img src="assets/img/about-img-1.jpg" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
 
<!-- Features Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">AADS-BUK <span class="text-primary">Features</span></h1>
            <p class="mb-0">Our Automated Ambulance Dispatch System at Bayero University, Kano, offers unparalleled emergency response services, ensuring safety and efficiency at all times.</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-trophy fa-2x"></span>
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">First Class Services</h5>
                                <p class="mb-0">Experience top-notch ambulance services with highly trained medical staff and state-of-the-art equipment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-road fa-2x"></span>
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">24/7 Availability</h5>
                                <p class="mb-0">Our ambulances are ready to respond to emergencies at any time, ensuring prompt medical attention.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="assets/img/features-img.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
            </div>
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Cost-Effective Solutions</h5>
                                <p class="mb-0">Providing quality emergency services at minimal costs, ensuring accessibility for all students and staff.</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-tag fa-2x"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Free Pick-Up & Drop-Off</h5>
                                <p class="mb-0">Convenient and reliable transportation for patients, ensuring they reach medical facilities safely and swiftly.</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-map-pin fa-2x"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Fact Counter -->
<div class="container-fluid counter bg-secondary py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-heartbeat fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">829</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Lives Saved</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-ambulance fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">56</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Ambulances Available</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-hospital fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">127</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Response Centers</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="counter-item text-center">
                    <div class="counter-item-icon mx-auto">
                        <i class="fas fa-bell fa-2x"></i>
                    </div>
                    <div class="counter-counting my-3">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">589</span>
                        <span class="h1 fw-bold text-white">+</span>
                    </div>
                    <h4 class="text-white mb-0">Total Responses</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Counter -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">AADS-BUK <span class="text-primary">Services</span></h1>
            <p class="mb-0">Our Automated Ambulance Dispatch System at Bayero University, Kano, provides essential emergency medical services, ensuring rapid response and comprehensive care for the university community.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-phone-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Phone Reservation</h5>
                    <p class="mb-0">Easily reserve ambulance services via phone for immediate assistance in emergencies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-money-bill-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Special Rates</h5>
                    <p class="mb-0">Affordable pricing and special rates for students and staff, ensuring accessible emergency care.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-road fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Emergency Transport</h5>
                    <p class="mb-0">Reliable and swift transport services for medical emergencies within and around the campus.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-umbrella fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Insurance Coverage</h5>
                    <p class="mb-0">Comprehensive insurance coverage for ambulance services, providing peace of mind during emergencies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-building fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Inter-Campus Transport</h5>
                    <p class="mb-0">Efficient transport services between different campuses for medical needs and emergencies.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="service-icon mb-4">
                        <i class="fa fa-car-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Free Emergency Rides</h5>
                    <p class="mb-0">Providing free rides for critical emergencies, ensuring timely medical intervention.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<?php include 'footer.php'; ?>