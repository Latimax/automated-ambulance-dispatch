<?php

$page = 'contact';

include 'header.php';
include 'navbar.php';
?>

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-primary mb-3">Contact Us</h1>
            <p class="mb-0">For inquiries or to request ambulance services, please fill out the contact form below or reach us directly at our hotline. We are here to assist you 24/7. Your safety is our priority.</p>
        </div>
        <div class="row g-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0">PMB 3011, Gwarzo Road Kano, Nigeria.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0">ambulance@buk.edu.ng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0">+234 703 220 1006</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fab fa-firefox-browser fa-2x"></i>
                            </div>
                            <div>
                                <h4>ambulance@buk.edu.ng</h4>
                                <p class="mb-0">+234 906 388 3519</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-secondary p-5 rounded">
                    <h4 class="text-primary mb-4">Send Your Message</h4>
                  
                    <form method="post" action="requests.php">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="caller_name">Caller Name</label>
                                                <input type="text" class="form-control" id="caller_name" name="caller_name" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="phone_number">Phone Number</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                            </div>
                                          
                                            <div class="col-12">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" required>
                                            </div>
                                            <div class="col-12">
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
            <div class="col-12 col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-5 bg-light rounded">
                    <div class="bg-white rounded p-4 mb-4">
                        <h4 class="mb-3">BUK Main Campus</h4>
                        <div class="d-flex align-items-center flex-shrink-0 mb-3">
                            <p class="mb-0 text-dark me-2">Address:</p><i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <p class="mb-0">Gwarzo Road, Kano, Nigeria</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 text-dark me-2">Telephone:</p><i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">(+234) 803 123 4567</p>
                        </div>
                    </div>
                    <div class="bg-white rounded p-4 mb-4">
                        <h4 class="mb-3">BUK New Campus</h4>
                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0 text-dark me-2">Address:</p><i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <p class="mb-0">Kano-Zaria Road, Kano, Nigeria</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 text-dark me-2">Telephone:</p><i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">(+234) 805 987 6543</p>
                        </div>
                    </div>
                    <div class="bg-white rounded p-4 mb-0">
                        <h4 class="mb-3">BUK Medical Campus</h4>
                        <div class="d-flex align-items-center mb-3">
                            <p class="mb-0 text-dark me-2">Address:</p><i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <p class="mb-0">Aminu Kano Teaching Hospital, Kano, Nigeria</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mb-0 text-dark me-2">Telephone:</p><i class="fa fa-phone-alt text-primary me-2"></i>
                            <p class="mb-0">(+234) 809 876 5432</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="rounded">
                    <iframe class="rounded w-100"
                        style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62447.88998287494!2d8.411134869432992!3d11.974977343448705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBUK%20ADDRESS!5e0!3m2!1sen!2sng!4v1742423450817!5m2!1sen!2sng"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

<?php include 'footer.php'; ?>